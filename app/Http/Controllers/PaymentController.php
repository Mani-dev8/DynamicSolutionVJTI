<?php

namespace App\Http\Controllers;

use App\Models\order;
use Carbon\Carbon;
use App\Models\services;
use App\Models\technician;
use Dompdf\Dompdf;
use App\Models\users_account;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class PaymentController extends Controller
{
    
    function payFunc(Request $request){
        
        $date_selected = $request->input('date_selected');
        $rapid_slot = $request->input('rapid_radio');
        $slot = $request->input('selected_slot');
        
        $technician = $request->input('selected_technician');
        // $request->session()->put('technician',$technician);
        $t_contactno=DB::table("technicians")->select('contact')->where("name",$technician)->value('contact');
        $s_id=DB::table("technicians")->where("name",$technician)->value('s_id');
        $image=DB::table("services")->where('s_id',$s_id)->value('image');

        return redirect('/checkout_page')->with(['technician'=>$technician,'t_contactno'=> $t_contactno,'image'=>$image,'date_selected'=>$date_selected,'rapid_slot'=>$rapid_slot,'slot'=>$slot]);
    }

    function orderFunc(Request $req){    
        // u_id 	u_address 	t_id 	o_amount 	rapid_service 	service_date 	time_slote 	order_type 	order_no 	booking_time 	phone_number 	t_name 	
        $username= $req->session()->get('user');
        $t_name=$req->input('t_name');
        $u_id=users_account::where('username',$username)->value('u_id');
        $t_id=technician::where('name',$t_name)->value("t_id");
        $u_address =$req->input('u_address');
        
        $rapid_service = $req->input('rapid_service');
        if($rapid_service==''){
            $rapid_service=0;
        }
        $service_date= $req->input('service_date');
        $time_slote=$req->input('time_slot');
        $o_amount=$req->input('o_amount');
        $order_no= $req->input('order_no');
        $phone_number=$req->input('contact_no');
        $order=new order;
        $order->u_id=$u_id;
        $order->u_address=$u_address;
        $order->t_id=$t_id;
        $order->o_amount=$o_amount;
        $order->rapid_service=$rapid_service;
        $order->service_date=$service_date;
        $order->time_slote=$time_slote;
        $order->order_no=$order_no;
        $order->booking_time=Carbon::now();
        $order->phone_number=$phone_number;
        $order->t_name=$t_name;
        $order->save();
        echo "order_placed ";
        echo "t_name ===  ".$t_name; 
        echo "user ==  ".$req->session()->get('user');

    }

    function generatePDF(Request $req)
    {
        $user=$req->session()->get('user');
        $username = users_account::where('username', $user)->value('username');
        $id = users_account::where('username', $username)->value('u_id');

        $orders = DB::table('orders')
        ->select('orders.*', 'users_accounts.username as users_accounts_username')
        ->join('users_accounts', 'orders.u_id', '=', 'users_accounts.u_id')
        ->where('orders.u_id', '=', $id)
            ->get();

        $html = `<h1>Orders Report For $username</h1>`;
        $html .= '<table class="border-2">';
        $html .= '<tr><th>Technician</th><th>Date of Service</th><th>Time Slot</th><th>Amount</th><th>Booking Time</th><th>Txn Id</th><th>Technician Phone</th></tr>';
        foreach ($orders as $order) {
            $html .= '<tr>';
            $html .= '<td>' . $order->t_name . '</td>';
            $html .= '<td>' . $order->service_date . '</td>';
            $html .= '<td>' . $order->time_slote . '</td>';
            $html .= '<td>' . $order->o_amount . '</td>';
            $html .= '<td>' . $order->booking_time . '</td>';
            $html .= '<td>' . $order->order_no . '</td>';
            $html .= '<td>' . $order->phone_number . '</td>';
            $html .= '</tr>';
        }
        
        $html .= '</table>';

        $dompdf = new Dompdf();

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $pdf = $dompdf->output();

        return new Response($pdf, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="orders_report.pdf"'
        ]);
    }
}

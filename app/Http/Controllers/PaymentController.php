<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\services;
use App\Models\technician;
use App\Models\users_account;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class PaymentController extends Controller
{
    
    function payFunc(Request $request){
        
        $date_selected = $request->input('date_selected');
        $rapid_slot = $request->input('rapid_radio');
        $slot = $request->input('selected_slot');
        $technician = $request->input('selected_technician');
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
        $order->phone_number=$phone_number;
        $order->t_name=$t_name;
        $order->save();
        echo "order_placed ";
        echo "user ==  ".$req->session()->get('user');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\technician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TechnicianController extends Controller
{
    //
    function techniciansFetch(Request $req){

        $s_id=$req->input('nameindex');
        $t_data= DB::table('services')->join('technicians','services.s_id','=','technicians.s_id')->where('services.s_id',$s_id )->get();
        $user=$req->session()->get('user');
        if ($user==null) {
            return redirect('/login');
        }
        else{
            return view("/appointment", ["t_data" => $t_data]);
        }
        // if ($user != '') {
        //     # code...
        //     try {
        //         return view("/appointment", ["t_data" => $t_data]);
        //     } catch (\Throwable $th) {
        //         return redirect('/login');
        //     }
        // }
           
    }
}

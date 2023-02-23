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
        return view("/appointment",["t_data"=>$t_data]);
    }
}

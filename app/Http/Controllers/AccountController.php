<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\users_account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    function accountFetch(Request $req){
        $username=$req->session()->get('user');
        if ($username!='') {
            $u_id=users_account::where('username',$username)->value('u_id');
            $email=users_account::where('username',$username)->value('email_id');
            $accounts=order::where('u_id', $u_id)->get();
            return redirect('accountdetails')->with(['accounts_data'=> $accounts,'username'=>$username,'email'=>$email]);
        }
        else{
            return view('home');
        }
    }
}

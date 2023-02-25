<?php

namespace App\Http\Controllers;

use App\Models\users_account;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class UserAuth extends Controller
{
    //
    function uVerification(Request $req)
    {
        $email = $req->input('email');
        $pass = $req->input('password');
        $u_id = users_account::where('email_id', $email)->where('password', $pass)->value('u_id');
        if ($u_id) {
            $u_name = users_account::where('email_id', $email)->where('password', $pass)->value('username');
            $req->session()->put('user', $u_name);
            return $req->session()->get('user');
        } else {
            return "false";
        }
        //   return $u_id;     
    }

    function gLoginFunc(Request $req){
        $email=$req->input('email');
        $username=$req->input('username');
        $user_account=new users_account;
        $usernamedb=users_account::where('email_id',$email)->value('username');
        if ($usernamedb=='') {
            $user_account->email_id=$email;
            $user_account->username=$username;
            $user_account->password=bcrypt(Str::random(12));
            $user_account->save();
        }
        $req->session()->put('user', $username);
        return "session created";  
    }
    function logoutFunc(Request $req){
        Session::flush();
        return redirect('login');
    }

    function createUser(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $pass = $req->input('password');
        $cnfpass = $req->input('cnfpassword');

        $user = new users_account;
        $user->username = $name;
        $user->email_id = $email;
        $user->password = $pass;

        $user->save();
        return view('/login');
    }
}

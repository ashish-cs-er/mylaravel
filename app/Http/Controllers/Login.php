<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //
    public function index(Request $req){
        //return $req->input();
        $req->session()->put('user',$req->input());
        //return $req->session()->get('user');
        return redirect('profile');
    }

    public function logout(Request $req){
        $req->session()->forget('user');
        //$request->session()->flush();
        return redirect('login');
    }
}

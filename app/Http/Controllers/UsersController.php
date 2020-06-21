<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
        $data = array('name'=>'user_name', 'pass'=>'user_pass');
        return view('users',['users_data'=>$data]);
    }
}

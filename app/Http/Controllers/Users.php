<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //index function
    public function index(){
        return "I am in Users/index";
    }

    //return array
    public function show(){
        return ['method'=>'users/show'];
    }

}

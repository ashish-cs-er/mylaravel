<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myuser;

class Profile extends Controller
{
    //
    public function index(Request $req){
        echo "<pre>";
        //print_r(Myuser::all());
        //print_r(Myuser::where('name','testing'));
        //print_r(Myuser::first());
        //print_r(Myuser::max('age'));
        //print_r(Myuser::min('age'));
        //print_r(Myuser::count());
        print_r(Myuser::find('4'));
    }
}

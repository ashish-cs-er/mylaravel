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
    public function addprofile(Request $req){
        //return $req->input();\
        $user = new Myuser;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->created_dt = date('Y-m-d H:i:s');
        $user->age = $req->input('age');
        return $user->save();
    }

    public function updateprofile(Request $req){
        //return $req->input();
        Myuser::where('id',4)->update(['name'=>$req->input('name'),'email'=>$req->input('email'), 'age'=>$req->input('age')]);
        return $req->input();
    }
}

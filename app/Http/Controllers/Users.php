<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function sample(){
        echo "sample view";
        $data['result']=['name'=>'controller action views'];
        return view('sample',$data);
    }
}

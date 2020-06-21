<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Items extends Controller
{
    //
    public function details(Request $request){
        return $request->input();
    }
}

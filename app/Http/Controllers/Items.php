<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Items extends Controller
{
    //
    public function index(Request $request){
        echo "Hello Controller";

        $request->validate([
            'item_name'=>'required|min:5|max:20',
            'item_cat'=>'required'
        ]);

        //for post
        //print_r( $request->input());

        //for get
        print_r($request->query());
        //to get the action of form
        echo '<br/>'.$request->path();

        //to get the method
        echo $request->method();
        //get the absolute url
        echo $request->url();
    }
}

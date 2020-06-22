<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Profile extends Controller
{
    //
    public function index(){
       // return "Hello From Profile Controller";
        //print_r(DB::select('select * from myusers'));
        print_r( DB::table('myusers')->get());
        print_r (DB::table('myusers')->find(3));
        //DB::table('myusers')->where('name','kamal')->delete();
        //check the date time format in db as well. Then provide the format to match the same in your query
        //DB::table('myusers')->insert(['name'=>'insert','email'=>'insert@gmail.com','created_dt'=>date('Y-m-d h:i:s', time())]);
        //return DB::table('myusers')->where('name','kamal')->get();

        //aggregate function
        print_r(DB::table('myusers')->max('age'));
        print_r(DB::table('myusers')->min('age'));
        print_r(DB::table('myusers')->sum('age'));
        print_r(DB::table('myusers')->average('age'));
        print_r(DB::table('myusers')->count());

        //using joins
        echo "<pre>";
        print_r(DB::table('myusers')->join('myaddress','myusers.id','myaddress.id')->get());
        $result['data'] = DB::table('myusers')->join('myaddress','myusers.id','myaddress.id')->get();
        return view('profile',$result);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadMe extends Controller
{
    //
    public function index(Request $req){
        $file = $req->file('upload_file');
        echo $orig = $file->getClientOriginalName();
        //$res=$file->move('uploads', $orig);
        //$res =  $req->file('upload_file')->store('uploads');
        $res = $file->storeAs('upload_file',$orig);
        return ['result'=>$res, 'upload'=>'success'];
    }
}

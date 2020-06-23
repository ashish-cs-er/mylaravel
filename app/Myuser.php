<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myuser extends Model
{
    //by default the plural of class name is taken as model name
    protected $table = "myusers";
    public $timestamps = false;
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sum extends Controller
{
    //
    function addnum(Request $req){
        $num1=$req->input('num1');
        $num2=$req->input('num2');
        $sum =$num1+$num2;
        return $sum; 
    }
}

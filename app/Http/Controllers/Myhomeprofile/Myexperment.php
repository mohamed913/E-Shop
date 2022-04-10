<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Myexperment extends Controller
{
    public function test1()
       {
          
           $arr=[];
           $arr['a']='ahmed';
           $arr['b']='mohamed';
           $arr['c']='ali';
        return view('layouts.testrr')->with('arr',$arr);
        
       }
}

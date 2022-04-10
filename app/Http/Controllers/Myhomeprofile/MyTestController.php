<?php

namespace App\Http\Controllers\Myhomeprofile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyTestController extends Controller
{
    //
     
       public function test1()
       {
          
           $arr=[];
           $arr['m']='mohamed';
           $arr['g']='gamal';
           $arr['c']='mahmoud';

        return view('objective')->with('arr',$arr);
        
       }
}

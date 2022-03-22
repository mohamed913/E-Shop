<?php

namespace App\Http\Controllers\myhomeprofile;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class MyHomeController extends Controller
{
    //
    public function homePage()
    {
        $myarr=[];
        $myarr['name']='ahmed';
        $myarr['age']=22;


       return view('myHomePage')->with('myarr',$myarr);
    }
    public function testr1()
    {
        
       return view('layouts.testrr');
    }
}

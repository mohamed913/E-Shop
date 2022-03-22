<?php

namespace App\Http\Controllers\myhomeprofile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;

class MyyHomeController extends Controller
{
    
    //
    public function homePage()
    {
        $myarr=[];
        $myarr['name']='ahmed';
        $myarr['age']=22;


       return view('myHomePage')->with('myarr',$myarr);
    }
    public function test1()
    {
       // Route::get('testr',[MyyHomeController::class, 'testr1']);
        
       return view('layouts.testrr');
    }


}

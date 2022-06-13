<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Myhomeprofile\MyTestController ;
use App\Http\Controllers\MyHomeController ;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





//Route::get('/', function () {
 // return view('index');
//});

Route::get('/{page}', [AdminController::class,'index']);




Route::get('/admin', function(){
  return view('layouts.admin');
}); // this route is to get dashboard for admin 
Route::get('/adminen', function(){
  return view('layouts.adminen');
}); // this route is to get dashboard for admin 




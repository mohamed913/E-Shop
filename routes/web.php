<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Myhomeprofile\MyTestController ;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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

Route::get('/', [MyTestController::class, 'index']); // this route is to get  the index page



//this is the first route i made to my profiloo
//route to home
//the 'prefix'=>'myhomeprofile' to the route 
// the 'namespace'=>'myhomeprofile' to the directory of MyHomeController

//
Route::group(['prefix' => LaravelLocalization::setLocale() ,
'middleware'=>[ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],function(){
Route::group([ 'prefix'=>'myhomeprofile',  /*'middleware'=>'auth'*/],function(){

    Route::get('testr', [MyTestController::class, 'test1']);//this route for get api json in browser this is for me to experement
    Route::get('/cat', [MyTestController::class, 'exper']); // this route is to get categories to the index page
    Route::delete('/categories/{id}', [MyTestController::class, 'destroy']); //this route to destroy category from the index page
});
    
   });

Auth::routes(['verify'=>true]);//this to do authentiaction it written by default when we do authentication
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');//this route is to get the login and register page


Route::get('dd',function(){

    return view('email.mailuser');

});










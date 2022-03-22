<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyTestController;
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

Route::get('/', function () {
    return view('welcome');
});




//Route::get('mohamed','MyTestController@mytestFunction');

Route::get('/gemy/{id}', function ($id) {
    return view('myHomePage');
})->name('ab');

//this is the first route i made to my profiloo
//route to home
//the 'prefix'=>'myhomeprofile' to the route 
// the 'namespace'=>'myhomeprofile' to the directory of MyHomeController
//Route::group(['prefix'=>'myhomeprofile','namespace'=>'myhomeprofile' , /*'middleware'=>'auth'*/],function(){

//Route::get('myhome','MyyHomeController@homePage');


//});




//Route::resource('testr','App\Http\Controllers\MyTestController');

Route::get('testr', [MyTestController::class, 'test1']);




/*Route::controller(MyTestController::class)->group(function()
{
  Route::get('testr','index');;
});*/

//Route::resource('testr', [MyTestController::class, 'index']);



//Route::get('testr', [MyyHomeController::class,'testr1']);
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

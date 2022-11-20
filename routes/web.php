<?php

use App\Http\Controllers\ZoznamController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',function(){
    return view('home');
});
Route::get('/login',function(){
    return view('login');
});
Route::get("/registration",function(){
    return view("registration");
});
//Route::get('/zoznam',function(){
  //  return view("zoznam");
//});

Route::get('zoznam',[ZoznamController::class,'index']);
Route::get('addGame',[ZoznamController::class,'create']);
Route::post('addGame',[ZoznamController::class,'store']);
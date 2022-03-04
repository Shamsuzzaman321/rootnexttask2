<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageA;
use App\Http\Controllers\productlist;
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
Route::get("user",[UserController::class,'getData']);
Route::get("pagea",[PageA::class,'loadView']);
Route::view('home','home');
Route::view('home','home');
Route::view('noaccess','noaccess')->middleware('protectPage');
Route::group(['middleware'=>['protectPage']],function(){
	Route::view('welcome','welcome');
});
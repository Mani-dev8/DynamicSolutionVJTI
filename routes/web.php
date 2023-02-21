<?php

use App\Http\Controllers\UserAuth;
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

Route::get('/home', function () {
    return view('home');
});
 Route::view('/login','login');
 Route::view('/services','services');
 Route::view('/contact','contact');
 Route::controller(UserAuth::class)->group(function(){
    Route::post('/user','uVerification')->name('user');
 });
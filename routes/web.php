<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TechnicianController;
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

Route::get('/home', [ServicesController::class, 'serviceFetch']);
Route::get('/appointment', [TechnicianController::class, 'techniciansFetch']);
Route::view('/login', 'login');
Route::post('/register', [UserAuth::class, 'createUser']);
Route::get('/generate-pdf', [PaymentController::class, 'generatePDF']);
Route::get('/logout', [UserAuth::class,'logoutFunc']);
Route::view('/signup', 'signup');
Route::view('/feature','features');
Route::view('/aboutus', 'aboutus');
Route::get('', [ServicesController::class, 'serviceFetch']);
Route::view('/cart', 'cart');
Route::view('/services', 'services');
Route::view('/contact', 'contact');
Route::view('/accountdetails','accounts');
Route::view('/checkout', 'checkout');
Route::view('/checkout_page', 'checkout');
Route::get('/gLogin',[UserAuth::class,'gLoginFunc']);
Route::get('/account', [AccountController::class, 'accountFetch']);
Route::get('/summary', [PaymentController::class, 'payFunc']);
Route::post('/order', [PaymentController::class, 'orderFunc']);
Route::controller(UserAuth::class)->group(function () {
   Route::post('/user', 'uVerification')->name('user'); //parameter name inside the name funciton should be same as 1 parameter of post funct 
});

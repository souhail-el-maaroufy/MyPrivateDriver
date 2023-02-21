<?php

use App\Http\Controllers\Front\reservation\ReservationController;
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

Route::get('/',[ReservationController::class,'index'])->name('landing_page');
Route::post('/reservation_details',[ReservationController::class,'reservation_details'])->name('reservation_details');
Route::post('/reservation_details/reservation',[ReservationController::class,'reservation'])->name('reservation');

Route::get('/contcat',function(){
    return view('contact');
})->name('contact');

Route::get('/airport_transfer',function(){
    return view('airport_transfer');
})->name('airport_transfer');

Route::get('/Business_travel',function(){
    return view('Business_travel');
})->name('Business_travel');

Route::get('/driver_services',function(){
    return view('driver_services');
})->name('driver_services');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonesController;

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

//Route::get('getphonedata', [PhonesController::class, "GetPhoneData"])-> name ("products");


Route::get('/',[PhonesController::class, "GetPhoneData"])-> name ("store");


Route::get('/checkout/{id}', [PhonesController::class, "GetPhoneid"])-> name ("checkout");

Auth::routes();
Route::post('getinvoice', [PhonesController::class, "GetInvoice"])-> name ("invoice");


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

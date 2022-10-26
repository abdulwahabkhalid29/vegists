<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\CompleteController;

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
})->name('index');

Route::get('vegist',[IndexController:: class , 'index'])->name('vegist.index');
Route::get('vegist/detail',[DetailController:: class , 'detail'])->name('vegist.detail');
Route::get('vegist/cart',[CartController:: class , 'cart'])->name('vegist.cart');
Route::get('vegist/checkout',[CheckController:: class , 'checkout'])->name('vegist.checkout');
Route::get('vegist/ordercomplete',[CompleteController:: class , 'ordercomplete'])->name('vegist.ordercomplete');
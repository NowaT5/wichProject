<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("home");
});
Route::get('/product', function () {
    return view("product");
});
Route::get('/order', function () {
    return view("order");
});
Route::get('/shiping', function () {
    return view("shiping");
});
Route::get('/member', function () {
    return view("member");
});

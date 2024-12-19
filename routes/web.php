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
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/favorit', function () {
    return view('favorit');
});

Route::get('/product', function () {
    return view('cart.product');
});

Route::get('/keranjang', function () {
    return view('cart.keranjang');
});

Route::get('/complete', function () {
    return view('cart.complete');
});

Route::get('/deliver', function () {
    return view('cart.deliver');
});


Route::get('/map', function () {
    return view('cart.map');
});

Route::get('/payment', function () {
    return view('cart.payment');
});

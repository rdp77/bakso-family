<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');

Route::get('/details', function () {
    return view('pages.shopDetails');
})->name('shopdetails');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

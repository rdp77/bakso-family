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

// Front End Page

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');

Route::get('/details', function () {
    return view('pages.shopDetails');
})->name('shopdetails');

Route::get('/cart', 'HomeController@cart')->name('cart');

Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');

Route::get('/profile', function () {
    return view('pages.userProfile');
})->name('profile');

Route::get('/settings', function () {
    return view('pages.usersettings');
})->name('profilesettings');

Auth::routes();

Route::get('/home', 'HomeController@dashboard')->name('home');

// User Front End
// Route::get('/user/create', 'UserController@create')->name('createUser');
// Route::post('/user/store', 'UserController@store');
Route::get('/history', 'UserController@history')->name('historyUser');
Route::get('/status', 'UserController@status')->name('statusUser');
Route::get('/changepass', 'UserController@password')->name('passwordUser');

// Check Role
Route::group(['middleware' => 'roles'], function () {
    // Product
    Route::get('/product', 'ProductController@index')->name('product');
    Route::get('/product/create', 'ProductController@create')->name('createProduct');
    Route::post('/product/store', 'ProductController@store');
    Route::get('/product/edit/{id}', 'ProductController@edit');
    Route::put('/product/update/{id}', 'ProductController@update');
    Route::get('/product/delete/{id}', 'ProductController@delete');

    // User
    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/user/create', 'UserController@create')->name('createUser');
    Route::post('/user/store', 'UserController@store');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::put('/user/update/{id}', 'UserController@update');
    Route::get('/user/delete/{id}', 'UserController@delete');
});

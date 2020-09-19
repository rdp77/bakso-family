<?php

use Illuminate\Support\Facades\Route;
use App\Product;

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
Route::get('/contact', 'DefaultController@contact')->name('contact');
Route::get('/shop', 'DefaultController@shop')->name('shop');

// Shop
Route::get('/cart', 'ProductController@cart')->name('cart');
Route::get('/clearcart', 'ProductController@clearCart')->name('clearCart');
Route::get('/add/{id}', 'ProductController@addProduct')->name('addProduct');
Route::get('/remove/{id}', 'ProductController@removeProduct')->name('removeProduct');
Route::get('/checkout', 'HomeController@checkOut')->name('checkout');
Route::get('/detail/{id:slug}', 'DefaultController@show');

Auth::routes();

// User Front End
Route::get('/history', 'UserController@history')->name('historyUser');
Route::get('/status', 'UserController@status')->name('statusUser');
Route::get('/changepass', 'UserController@password')->name('passwordUser');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/settings', 'UserController@settings')->name('profileSettings');
// User Front End Changes
Route::post('/reset', 'Auth\ForgotPasswordController@changePass')->name('changePass');
Route::post('/update', 'UserController@updateProfile')->name('updateProfile');

// Check Role
Route::group(['middleware' => 'roles'], function () {
    // Dashboard
    Route::get('/home', 'HomeController@dashboard')->name('home');
    // Product
    Route::get('/product', 'ProductController@index')->name('product');
    Route::get('/product/create', 'ProductController@create')->name('createProduct');
    Route::post('/product/store', 'ProductController@store')->name('storeProduct');
    Route::get('/product/edit/{id}', 'ProductController@edit');
    Route::put('/product/update/{id}', 'ProductController@update');
    Route::get('/product/delete/{id}', 'ProductController@delete');
    // User
    Route::get('/user', 'UserController@index')->name('user');
    Route::get('/user/create', 'UserController@create')->name('createUser');
    Route::post('/user/store', 'UserController@store')->name('storeUser');
    Route::get('/user/edit/{id}', 'UserController@edit');
    Route::put('/user/update/{id}', 'UserController@update');
    Route::get('/user/delete/{id}', 'UserController@delete');
});

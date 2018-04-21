<?php

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

Route::get('/', 'CafeController@index');

Route::get('menu', 'CafeController@menu');

Route::get('schedule', 'CafeController@schedule');

Route::get('swag', 'CafeController@swag');

Route::get('news', 'CafeController@news');

Route::get('admin', 'CafeController@admin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

# Paypal Routes
Route::get('paypal/express-checkout', 'PaypalController@expressCheckout')->name('paypal.express-checkout');
Route::get('paypal/express-checkout-success', 'PaypalController@expressCheckoutSuccess');
Route::post('paypal/notify', 'PaypalController@notify');
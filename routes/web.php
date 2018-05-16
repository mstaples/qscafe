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

# Authentication Routes
Auth::routes();

# Main site routes
Route::get('/', 'CafeController@index')->name('home');

Route::get('menu', 'CafeController@menu')->name('menu');

Route::get('schedule', 'CafeController@schedule')->name('schedule');

Route::get('swag', 'CafeController@swag')->name('swag');

Route::get('news', 'CafeController@news')->name('news');

# Paypal Routes
Route::get('paypal/express-checkout', 'PaypalController@expressCheckout')->name('paypal.express-checkout');
Route::get('paypal/express-checkout-success', 'PaypalController@expressCheckoutSuccess');
Route::post('paypal/notify', 'PaypalController@notify');
Auth::routes();

# Auth Routes
Route::middleware(['auth'])->group(function() {
    Route::prefix('user')->group(function () {
        // Only authenticated users may enter...
        Route::get('profile', 'UserController@profile');
        Route::post('profile', 'UserController@profile');
    });
});

# Admin Routes
Route::middleware(['admin'])->group(function() {
    Route::prefix('edit')->group(function () {
        // Only admin users may enter...
        Route::get('main', 'AdminController@main');
        Route::post('main', 'AdminController@main');

        Route::get('menu', 'AdminController@menu');
        Route::post('menu', 'AdminController@menu');

        Route::get('schedule', 'AdminController@schedule');
        Route::post('schedule', 'AdminController@schedule');

        Route::get('swag', 'AdminController@swag');
        Route::post('swag', 'AdminController@swag');
    });
});

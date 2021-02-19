<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
 });

// Route::get('register', 'App\Http\Controllers\Auth\RegisterController@register');
// Route::post('register', 'App\Http\Controllers\Auth\RegisterController@store');

//Route::get('login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/', 'App\Http\Controllers\Auth\LoginController@authenticate')->name('login');
Route::get('login', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'App\Http\Controllers\HomeController@home')->name('home');

// Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail');
// Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail');

// Route::get('reset-password/{token}', 'Auth\ResetPasswordController@getPassword');
// Route::post('reset-password', 'Auth\ResetPasswordController@updatePassword');

//Route::resource('home' ,'App\Http\Controllers\ItemController');

//item
Route::get('home/create','App\Http\Controllers\ItemController@create')->name('item.create');
Route::post('home/create','App\Http\Controllers\ItemController@store')->name('item.store');

//purchase
Route::get('home/purchase','App\Http\Controllers\PurchaseController@index')->name('purchase_pages.index');
Route::get('home/purchase/create','App\Http\Controllers\PurchaseController@create')->name('purchase.create');
Route::post('home/purchase/create','App\Http\Controllers\PurchaseController@store')->name('purchase.store');


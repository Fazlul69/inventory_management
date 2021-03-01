<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate')->name('login');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('loginFail');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'App\Http\Controllers\HomeController@home')->name('home');



//item
Route::get('home/item','App\Http\Controllers\ItemController@index')->name('item_pages.index');
Route::get('home/create','App\Http\Controllers\ItemController@create')->name('item.create');
Route::post('home/create','App\Http\Controllers\ItemController@store')->name('item.store');

//purchase
Route::get('home/purchase','App\Http\Controllers\PurchaseController@index')->name('purchase_pages.index');
Route::get('home/purchase/create','App\Http\Controllers\PurchaseController@create')->name('purchase.create');
Route::post('home/purchase/create','App\Http\Controllers\PurchaseController@store')->name('purchase.store');

//vendor
Route::get('home/vendor','App\Http\Controllers\VendorController@index')->name('vendor_pages.index');
Route::get('home/vendor/create','App\Http\Controllers\VendorController@create')->name('vendor.create');
Route::post('home/vendor/create','App\Http\Controllers\VendorController@store')->name('vendor.store');
Route::get('edit/{id}','App\Http\Controllers\VendorController@edit')->name('edit');
Route::post('update/{id}','App\Http\Controllers\VendorController@update')->name('update');
Route::delete('delete/{id}','App\Http\Controllers\VendorController@delete')->name('delete');

//sales
Route::get('home/sales','App\Http\Controllers\SalesController@index')->name('sales_pages.index');
Route::get('home/sales/create','App\Http\Controllers\SalesController@create')->name('sales.create');
Route::post('home/sales/create','App\Http\Controllers\SalesController@store')->name('sales.store');
//Dashboard
Route::get('home/dashboard','App\Http\Controllers\AccountingController@index')->name('dashboard.index');
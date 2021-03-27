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
Route::get('home/item/search','App\Http\Controllers\ItemController@search')->name('item.search');

//purchase
Route::get('home/purchase','App\Http\Controllers\PurchaseController@index')->name('purchase_pages.index');
Route::get('home/purchase/create','App\Http\Controllers\PurchaseController@create')->name('purchase.create');
Route::post('home/purchase/create','App\Http\Controllers\PurchaseController@store')->name('purchase.store');
Route::get('home/purchase/search','App\Http\Controllers\PurchaseController@search')->name('purchase.search');
Route::get('stored/edit/{id}','App\Http\Controllers\PurchaseController@edit')->name('purchase.edit');
Route::post('stored/update/{id}','App\Http\Controllers\PurchaseController@update')->name('purchase.update');
Route::delete('stored/delete/{id}','App\Http\Controllers\PurchaseController@delete')->name('purchase.delete');

//vendor
Route::get('home/vendor','App\Http\Controllers\VendorController@index')->name('vendor_pages.index');
Route::get('home/vendor/create','App\Http\Controllers\VendorController@create')->name('vendor.create');
Route::post('home/vendor/create','App\Http\Controllers\VendorController@store')->name('vendor.store');
Route::get('edit/{id}','App\Http\Controllers\VendorController@edit')->name('edit');
Route::post('update/{id}','App\Http\Controllers\VendorController@update')->name('update');
Route::delete('delete/{id}','App\Http\Controllers\VendorController@delete')->name('vendor.delete');
Route::get('home/vendor/search','App\Http\Controllers\VendorController@search')->name('vendor.search');

//sales
Route::get('home/sales','App\Http\Controllers\SalesController@index')->name('sales_pages.index');
Route::get('home/sales/create','App\Http\Controllers\SalesController@create')->name('sales.create');
Route::post('home/sales/create','App\Http\Controllers\SalesController@store')->name('sales.store');
Route::get('home/sales/search','App\Http\Controllers\SalesController@search')->name('sales.search');
Route::get('out/edit/{id}','App\Http\Controllers\SalesController@edit')->name('sales.edit');
Route::post('out/update/{id}','App\Http\Controllers\SalesController@update')->name('sales.update');
Route::delete('out/delete/{id}','App\Http\Controllers\SalesController@delete')->name('sales.delete');

//Damage
Route::get('home/damage','App\Http\Controllers\DamageController@index')->name('damage.index');
Route::get('home/damage/create','App\Http\Controllers\DamageController@create')->name('damage.create');
Route::post('home/damage/create','App\Http\Controllers\DamageController@store')->name('damage.store');
Route::get('damage/edit/{id}','App\Http\Controllers\DamageController@edit')->name('damage.edit');
Route::post('damage/update/{id}','App\Http\Controllers\DamageController@update')->name('damage.update');
Route::delete('damage/delete/{id}','App\Http\Controllers\DamageController@delete')->name('damage.delete');
Route::get('home/damage/search','App\Http\Controllers\DamageController@search')->name('damage.search');
//Dashboard
Route::get('home/dashboard','App\Http\Controllers\AccountingController@index')->name('dashboard.index');

//Barcode
Route::get('barcode','App\Http\Controllers\BarcodeController@index')->name('bar.index');
Route::get('home/barcode/create','App\Http\Controllers\BarcodeController@create')->name('bar.create');
Route::post('home/barcode/create','App\Http\Controllers\BarcodeController@store')->name('bar.store');
Route::get('barcode/search','App\Http\Controllers\BarcodeController@search')->name('bar.search');
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route untuk Check In Barang
Route::get('checkin', 'CheckInController@index');
Route::get('checkin/{id}', 'CheckInController@edit');
Route::resource('checkin', 'CheckInController');

// Route untuk Check Out Barang
Route::get('checkout', 'CheckOutController@index');
Route::get('checkout/{id}', 'CheckOutController@edit');
Route::resource('checkout', 'CheckOutController');

Route::get('/pengaturan', 'HomeController@vSet')->name('setting');

Route::get('/home', 'HomeController@index')->name('home');

// Routes for product handphone
Route::get('/product_hp', 'HomeController@vProduct')->name('product');
Route::resource('product', 'ProductController');
Route::get('api/product', 'ProductController@apiProduct')->name('api.product');

// Routes for data supplier
Route::get('/data-supplier', 'HomeController@Sup')->name('supplier');
Route::resource('supplier', 'SupplierController');
Route::get('api/supplier', 'SupplierController@apiSupplier')->name('api.supplier');

// Routes for setting
Route::get('/pengaturan', 'HomeController@vSet')->name('setting');
Route::resource('setting', 'SettingController');
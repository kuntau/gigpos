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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'ProductController@index')->name('products.index');
Route::get('/user', 'UserController@index')->name('users.index');

// Route::get('/dashboard', 'POSController@index')->name('pos.index');
Route::get('/pos', 'POSController@index')->name('pos.index');
Route::get('/pos/cashier', 'POSController@cashier')->name('pos.cashier');

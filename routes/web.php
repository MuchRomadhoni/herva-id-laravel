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

Route::get('/reseller', function () {
    return view('reseller');
});

Route::get('/supplier', function () {
    return view('supplier');
});

Route::get('/daftar-reseller', function () {
    return view('pendaftaran.daftar-reseller');
});

Route::get('/daftar-supplier', function () {
    return view('pendaftaran.daftar-supplier');
});

//product
Route::resource('products','ProductController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

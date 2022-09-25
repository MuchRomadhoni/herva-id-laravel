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

// Error
Route::get(
    '/logout',
    function () {
        return abort(404);
    }
);
Route::get(
    '/store',
    function () {
        return abort(404);
    }
);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reseller', function () {
    return view('reseller');
});

Route::get('/supplier', function () {
    return view('supplier');
});

// Route::get('/daftar-reseller', function () {
//     return view('pendaftaran.daftar-reseller');
// })->name('daftar-supplier');

Route::get('/daftar-supplier', function () {
    return view('pendaftaran.daftar-supplier');
});

 //perangkat desa
    
    Route::get('daftar-reseller', 'daftarResellerController@create')->name('create.daftarReseller');
    Route::post('daftar-reseller/store', 'daftarResellerController@store');

    Route::get('daftar-supplier', 'daftarResellerController@createSupplier')->name('createSupplier.daftarReseller');
    Route::post('daftar-supplier/store', 'daftarResellerController@storeSupplier');


//product
Route::resource('products','ProductController');
Auth::routes();

// Route::resource('daftarReseller','daftarResellerController');
// Route::resource('home', 'daftarResellerController');
Route::middleware('auth')->group(function () {
    
    Route::get('dashboard', 'daftarResellerController@index');
    Route::get('daftar-supplier-baru', 'daftarResellerController@indexSupplier');
    Route::get('archive', 'daftarResellerController@indexArchive');
    //update
    // Route::get('dashboard/{daftarReseller:id}/edit', 'daftarResellerController@edit');
    Route::put('dashboard/update/{daftarReseller:id}', 'daftarResellerController@update');
    //delete
    Route::delete('dashboard/delete/{daftarReseller:id}', 'daftarResellerController@destroy');
});

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
    return view('index');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// KATALOG
Route::get('/katalog/tambah', 'HomeController@tambahKatalog')->name('katalog-tambah');


// PESANAN
Route::get('/pesanan', 'HomeController@listPesanan')->name('pesanan-list');

Route::get('/incoming-order', function () {
    return view('incoming-order');
});

Route::get('/ongoing-order', function () {
    return view('ongoing-order');
});

Route::get('/order-complete', function () {
    return view('order-complete');
});

Route::get('/total-order', function () {
    return view('total-order');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/print-invoice', function () {
    return view('print-invoice');
});

Route::get('/tambah-katalog', function () {
    return view('tambah-katalog');
});

Route::get('/kelola-katalog', function () {
    return view('kelola-katalog');
});

Route::get('/update-katalog', function () {
    return view('update-katalog');
});
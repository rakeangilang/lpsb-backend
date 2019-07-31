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



Auth::routes();

Route::middleware('auth:admin')->group(function(){
  Route::get('/', 'HomeController@index')->name('root');
  Route::get('kelola-admin', 'AdminController@showAdmin')->name('kelola-admin');
  Route::get('kelola-pelanggan', 'AdminController@showPelanggan')->name('kelola-pelanggan');
  Route::get('incoming-order', 'AdminController@incomingOrder')->name('incoming-order');
  Route::get('ongoing-order', 'AdminController@ongoingOrder')->name('ongoing-order');
  Route::get('order-complete', 'AdminController@completeOrder')->name('order-complete');
  Route::get('canceled-order', 'AdminController@totalOrder')->name('canceled-order');
  Route::get('detail/{id}', 'AdminController@detailOrder')->name('detail-order');
  Route::get('tambah-admin', 'AdminController@tambahAdmin')->name('tambah-admin');
  Route::get('tambah-katalog', 'KatalogController@tambahKatalog')->name('tambah-katalog');
  Route::get('kelola-katalog', 'KatalogController@kelolaKatalog')->name('kelola-katalog');
  Route::post('tambah-katalog','KatalogController@addKatalog')->name('tambah-katalog.post');
  Route::get('tambah-kategori', 'KatalogController@tambahKategori')->name('tambah-kategori');
  Route::post('tambah-kategori', 'KatalogController@addKategori')->name('tambah-kategori.post');
  Route::get('status/{id}/{status}','AdminController@setStatus')->name('set-status');
  Route::get('edit-katalog/{id}', 'KatalogController@editKatalog')->name('edit-katalog');
  Route::post('edit-katalog/{id}', 'KatalogController@updateKatalog')->name('edit-katalog.post');
  Route::get('print-invoice/{id}', 'AdminController@printInvoice')->name('print-invoice');
});

Route::prefix('admin')->group(function () {
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
  Route::get('register', 'AdminController@create')->name('admin.register');
  Route::post('register', 'AdminController@store')->name('admin.register.store');
  Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
  Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
  Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');
  
  });
// KATALOG
// Route::get('/katalog/tambah', 'HomeController@tambahKatalog')->name('katalog-tambah');


// PESANAN
// Route::get('/pesanan', 'HomeController@listPesanan')->name('pesanan-list');

// Route::get('/incoming-order', function () {
//     return view('incoming-order');
// });

// Route::get('/ongoing-order', function () {
//     return view('ongoing-order');
// });

// Route::get('/order-complete', function () {
//     return view('order-complete');
// });

// Route::get('/canceled-order', function () {
//     return view('canceled-order');
// });

Route::get('/details', function () {
    return view('details');
});

// Route::get('/print-invoice', function () {
//     return view('print-invoice');
// });

// Route::get('/tambah-katalog', function () {
//     return view('tambah-katalog');
// });

// Route::get('/kelola-katalog', function () {
//     return view('kelola-katalog');
// });

Route::get('/update-katalog', function () {
    return view('update-katalog');
});

// Route::get('/tambah-admin', function () {
//     return view('tambah-admin');
// });

// Route::get('/kelola-admin', function () {
//     return view('kelola-admin');
// });

Route::get('/update-admin', function () {
    return view('update-admin');
});

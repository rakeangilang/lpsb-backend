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
  Route::get('incoming-order', 'AdminController@incomingOrder')->name('incoming-order');
  Route::get('ongoing-order', 'AdminController@ongoingOrder')->name('ongoing-order');
  Route::get('order-complete', 'AdminController@completeOrder')->name('order-complete');
  Route::get('total-order', 'AdminController@totalOrder')->name('total-order');
  Route::get('detail/{id}', 'AdminController@detailOrder')->name('detail-order');
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

// Route::get('/total-order', function () {
//     return view('total-order');
// });

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

Route::get('/tambah-admin', function () {
    return view('tambah-admin');
});

// Route::get('/kelola-admin', function () {
//     return view('kelola-admin');
// });

Route::get('/update-admin', function () {
    return view('update-admin');
});

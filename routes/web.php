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
Route::get('/', function () {
    return view('home');
});


Route::get('/oke2', function () {
    return view('oke2');
});



Route::get('/coba', function () {
    return view('coba');
});

Route::get('/jastiper', function () {
    return view('jastiper');
});


Route::get('/profil', function () {
    return view('profile1');
});

Route::get('/product', function () {
    return view('produk');
});

Route::get('/profil','ProfileController@show3')->name('profil');
Route::get('/profile','ProfileController@show')->name('profile');
Route::PATCH('/profile', 'ProfileController@update')->name('profile.update');
//Route::get('/profil/{id}/show','ProfileController@show2')->name('profil.produk');


Route::post('/oke/{id}/store', 'ProductController@store')->name('store.product');
Route::get('/oke/{id}/update', 'ProductController@showid')->name('show.update');
Route::PATCH('/oke2/{id}/update', 'ProductController@update')->name('update.product');
Route::delete('/oke/{id}/destroy', 'ProductController@destroy')->name('delete.product');
Route::get('/oke', 'ProductController@show')->name('show.product');

//Route::post('/profile', 'JastiperController@store')->name('jastiper.store');
Route::post('/jastiper', 'JastiperController@storeEvent')->name('event.store');

Route::get('/coba', 'HomePageController@show')->name('show.user');

Route::get('/event', 'EventController@show')->name('show.event');
Route::get('/oke/{id}/tambah', 'EventController@showid')->name('tambah.product');


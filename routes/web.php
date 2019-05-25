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

Route::get('/orderlist', function () {
    return view('order');
});

Route::get('/oke2', function () {
    return view('oke2');
});

Route::get('/jastiper', function () {
    return view('jastiper');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/product', function () {
    return view('produk');
});

Route::get('/profil', function () {
    return view('profile1');
});

Route::get('/negara', function () {
    return view('negara');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/main', function () {
    return view('main');
});

//Routing semuamua tentang profile
Route::get('/profil','ProfileController@show3')->name('profil');
Route::get('/profile','ProfileController@show')->name('profile');
Route::PATCH('/profile', 'ProfileController@update')->name('profile.update');
Route::get('/product2/{id}','EventController@showproduct')->name('event.product');
Route::get('/product/{id}','ProductController@singleproduct')->name('single.product');
//Route::get('/profil/{id}/show','ProfileController@show2')->name('profil.produk');
Route::get('/profileinfo/{id}','ProfileController@showprofile')->name('profile.id');
Route::get('/profileinfo/{id}','ProfileController@showbyid')->name('profileby.id');

//Routing semuamua tentang produk
Route::post('/oke/{id}/store', 'ProductController@store')->name('store.product');
Route::get('/oke/{id}/update', 'ProductController@showid')->name('show.update');
Route::PATCH('/oke2/{id}/update', 'ProductController@update')->name('update.product');
Route::delete('/oke/{id}/destroy', 'ProductController@destroy')->name('delete.product');
Route::get('/oke', 'ProductController@show')->name('show.product');

//Routing semuamua untuk jastiper
Route::post('/jastiper', 'JastiperController@storeEvent')->name('event.store');
Route::get('/orderlist', 'JastiperController@tampilkanorder')->name('tampil.order');

//Routing Homepage
Route::get('/', 'HomePageController@show')->name('show.user');
Route::get('/negara/{id}', 'HomePageController@showevent')->name('event.country');

//Routing tentang Event
Route::get('/event', 'EventController@show')->name('show.event');
Route::get('/oke/{id}/tambah', 'EventController@showid')->name('tambah.product');
Route::delete('/event/{id}/destroy', 'EventController@destroy')->name('delete.event');

//Routing nitipers untuk membeli produk
Route::post('/cart/{id}', 'BeliController@belanja')->name('tambah.itemscart');
Route::get('/cart', 'BeliController@showcart')->name('tampil.cart');
Route::delete('/cart/{id}/delete', 'BeliController@destroy')->name('delete.itemscart');



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


Route::get('/profile1','ProfileController@show1')->name('profile1');
Route::get('/profile','ProfileController@show')->name('profile');
Route::PATCH('/profile', 'ProfileController@update')->name('profile.update');

//Route::get('/profile1/{id}/show', 'ProductController@showid')->name('show.profile');
//Route::get('/coba/{id}/update', 'ProfileController@showid')->name('show.profile');
//Route::get('/coba/{id}/update', 'ProfileController@update')->name('update.profile');
//Route::delete('/profile1/{id}/destroy', 'ProductController@destroy')->name('delete.productprof');

Route::post('/product', 'ProductController@store')->name('store.product');
Route::get('/oke2/{id}/update', 'ProductController@showid')->name('show.update');
Route::PATCH('/oke2/{id}/update', 'ProductController@update')->name('update.product');
Route::delete('/oke/{id}/destroy', 'ProductController@destroy')->name('delete.product');
Route::get('/oke', 'ProductController@show')->name('show.product');
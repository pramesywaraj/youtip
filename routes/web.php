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

Route::get('/profile','ProfileController@show')->name('profile');
Route::PATCH('/profile', 'ProfileController@update')->name('profile.update');

Route::post('/product', 'ProductController@store')->name('store.product');
Route::get('/oke2/{id}/update', 'ProductController@showid')->name('show.update');
Route::PATCH('/oke2/{id}/update', 'ProductController@update')->name('update.product');
Route::get('/oke', 'ProductController@show')->name('show.product');
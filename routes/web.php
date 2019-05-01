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

Route::get('/oke', function () {
    return view('oke');
});

Route::get('/profile','ProfileController@show')->name('profile');
Route::PATCH('/profile', 'ProfileController@update')->name('profile.update');


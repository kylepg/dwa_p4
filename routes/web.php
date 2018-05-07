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
    return view('pages/home');
});

Route::get('/coffee', function () {
    return view('pages/coffee');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/user/{id}', function () {
    return view('pages/user');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

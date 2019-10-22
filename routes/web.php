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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dosen', 'controller1@index');

// Route::get('/login', 'LoginController@index');

Route::get('/register', 'LoginController@index');



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

Route::get('/vista1', function () {
    return view('vista1');
});

Route::get('/vista2', function () {
    return view('vista2');
});

Route::get('/vista3', function () {
    return view('vista3');
});

Route::get('/vista4', function () {
    return view('vista4');
});

Route::get('/vista5', function () {
    return view('vista5');
});
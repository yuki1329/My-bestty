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

Route::get('howto', function () {

    return view('howto');
});

Route::get('/', function () {

    return view('home');
});

Route::get('result', function () {

    return view('result');
});

Route::get('question', function () {

    return view('question');
});


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


Route::get('/bestty/top','BesttyController@index')->name('bestty.index');


Route::get('/bestty/ma_question','BesttyController@ma_question')->name('bestty.ma_question');

Route::get('/bestty/fe_question','BesttyController@fe_question')->name('bestty.fe_question');

Route::get('/bestty/how_to','BesttyController@howto')->name('bestty.howto');

Route::get('/bestty/result','BesttyController@result')->name('bestty.result');

Route::get('/', function () {

    return view('home');
});

Route::get('result', function () {

    return view('result');
});

Route::get('question', function () {

    return view('question');
});


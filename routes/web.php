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
Route::get('/bestty/fe_question','FemaleBesttyController@fe_question')->name('bestty.fe_question');
Route::get('/bestty/how_to','BesttyController@howto')->name('bestty.howto');
Route::post('/bestty/result-ma1','BesttyController@result')->name('bestty.result-ma1');
<<<<<<< HEAD

Route::post('/bestty/result-fe1','FemaleBesttyController@result')->name('bestty.result');




=======
Route::post('/bestty/result-ma2','BesttyController@result')->name('bestty.result-ma2');
Route::post('/bestty/result-ma3','BesttyController@result')->name('bestty.result-ma3');
Route::post('/bestty/result-fe1','FemaleBesttyController@result')->name('bestty.result-fe1');
Route::post('/bestty/result-fe2','FemaleBesttyController@result')->name('bestty.result-fe2');
Route::post('/bestty/result-fe3','FemaleBesttyController@result')->name('bestty.result-fe3');
>>>>>>> develop

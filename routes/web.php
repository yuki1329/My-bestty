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
Route::post('/bestty/resultMa','BesttyController@result')->name('bestty.resultMa');
Route::post('/bestty/resultFe','FemaleBesttyController@result')->name('bestty.resultFe');
Route::get('/bestty/result-ma1','BesttyController@resultMa1')->name('bestty.result-ma1');
Route::get('/bestty/result-ma2','BesttyController@resultMa2')->name('bestty.result-ma2');
Route::get('/bestty/result-ma3','BesttyController@resultMa3')->name('bestty.result-ma3');
Route::get('/bestty/result-fe1','FemaleBesttyController@resultFe1')->name('bestty.result-fe1');
Route::get('/bestty/result-fe2','FemaleBesttyController@resultFe2')->name('bestty.result-fe2');
Route::get('/bestty/result-fe3','FemaleBesttyController@resultFe3')->name('bestty.result-fe3');

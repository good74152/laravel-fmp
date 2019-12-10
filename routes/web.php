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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('index');
});

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
//搜尋遺失物公開資料記錄
Route::get('/search_record', 'SearchRecord@index')->name('home');
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> d89cb519d121555523b290b1e9cd203599c22949

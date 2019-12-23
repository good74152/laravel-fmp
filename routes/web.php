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
Route::get('/', 'HomeController@index')->name('home');
/*
Route::get('/', function () {
  return response()->json([
  'stuff' => phpinfo()
]);
});*/

//搜尋遺失物公開資料記錄
Route::get('/search_record', 'SearchRecordController@index')->name('home');
Route::post('/search_record/search', 'SearchRecordController@search');

Route::get('/bulletin', 'PostMissingDataController@index')->name('bulletin.index');

Route::get('/userpost', 'UserPostController@index')->name('userpost.index')->middleware('auth');
Route::post('/userpost/store', 'UserPostController@store')->name('userpost.store');

Auth::routes();

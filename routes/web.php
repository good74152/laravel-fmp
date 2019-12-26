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
Route::pattern('post_missing_data', '[0-9]+'); //限制傳入id為0-9數字
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
Route::post('/bulletin/search', 'PostMissingDataController@search')->name('bulletin.search');

Route::get('/userpost', 'UserPostController@index')->name('userpost.index')->middleware('auth');
Route::post('/userpost/store', 'UserPostController@store')->name('userpost.store');


Route::get('/bulletin/show/{post_missing_data}', 'PostMissingDataController@show')->name('showpost'); //顯示公告詳情頁

Route::post('/bulletin/store/{post_missing_data}', 'CommentController@store')->name('comment.store');//儲存留言

Route::get('/userprofile/{user}', 'UserController@index');

Route::post('/userpofile/subscribe/{user}', 'UserController@store');

Auth::routes();

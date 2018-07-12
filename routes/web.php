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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/detail/{id}', 'HomeController@detail')->name('detail');

Route::get('/download/{filename}', 'HomeController@download')->name('download');

Route::get('/comment/{user_id}', 'UserCommentController@add')->name('add');

Route::get('/file/{user_id}', 'UserFileController@add')->name('add');

Route::post('/saveComment', 'UserCommentController@save')->name('save');

Route::post('/saveFile', 'UserFileController@save')->name('save');

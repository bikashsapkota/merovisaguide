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

Auth::routes();
Route::get('/', 'HomeController@landing');


//imported
Route::get('/admin', 'AdminActionController@index')->name("admin.index");
Route::get('/post/{title}','PostController@index');

Route::post('/admin/post/store','PostController@store')->name('admin.store_post');


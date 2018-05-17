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
//Route::get('/home', 'HomeController@landing')->name('home');
Route::get('/admin','AdminActionController@index')->name('admin.index');



//imported
Route::get('/a', 'HomeController@index1')->name("main");
Route::get('/home', 'HomeController@minor')->name("home");

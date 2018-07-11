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
Route::get('/admin/posts','PostController@allposts');
Route::get('/admin/post/delete/{post}','PostController@destroy');
Route::get('/admin/post/edit/{post}','PostController@edit');


Route::get('/post/{title}','PostController@index')->name('post.show');

Route::post('/admin/post/update','PostController@update')->name('admin.update_post');

Route::post('/admin/post/store','PostController@store')->name('admin.store_post');
Route::post('/landingtopost','HomeController@landingtopost')->name('landingtopost');
Route::get('/robot.txt','HomeController@getrobot');
Route::get('/sitemap.xml','HomeController@getsitemap');
Route::post('/enquiry','EnqueryController@store')->name('enquery');
Route::get('/enqueries','EnqueryController@index')->name('enqueries');
Route::get('/faqs','FaqController@index')->name('faqs');

//Route::get('/country','CountryVisaController@index')->name('country');
Route::get('/country/{country}', 'HomeController@showVisatype');
Route::get('/visatypes/{vt}','HomeController@showCountry');

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


Route::get('/',function(){
return view('auth.login');
});


Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify'=>true]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/activity','ActivityController@index');

Route::post('/createactivity','ActivityController@create')->name('createactivity');

Route::get('/create','ActivityController@index2');

// Route::resource('result','ResultController');

 
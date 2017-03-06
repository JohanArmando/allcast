<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {return view('auth.login');});
Route::get('/contact', function () {return view('auth.contact');});
Route::get('/streams', function () {return view('auth.streams');});
Route::get('/player', function () {return view('admin.player');});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['namespace' => 'Admin'], function () {
    Route::resource('stream', 'StreamController');
    Route::get('user/profile', 'UserController@index');
    Route::post('user/profile', 'UserController@profile');
    Route::post('user/password', 'UserController@password');

    Route::post('stream/home', 'StreamController@home');
});


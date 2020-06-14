<?php

use Illuminate\Support\Facades\Route;  //use route class I think

//Use RouteController to redirect user by url

//Get routes
Route::get('/', 'RouteController@index')->name('home');
Route::get('/topkeys', 'RouteController@getKeys')->name('topkeys');
Route::get('/about', 'RouteController@about')->name('about');
Route::get('/contacts', 'RouteController@contacts')->name('contacts');
Route::get('/getkey', 'RouteController@getkey')->name('getkey');
Route::get('/feedback', 'RouteController@feedback')->name('feedback');
Route::get('/profile/{hash}', 'RouteController@profile')->name('profile');
Route::get('/review/{key}/{id}', 'RouteController@review')->name('review');

//Post routes
Route::post('/getkey/register/findkey', 'RouteController@findkey')->name('findkey');
Route::post('/getkey/register', 'RegisterController@getkey')->name('getkey.register');
Route::post('/feedback/create', 'RegisterController@review')->name('give.review');

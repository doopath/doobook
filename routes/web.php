<?php

use Illuminate\Support\Facades\Route;

//Use RouteController to redirect user by url
Route::get('/', 'RouteController@index')->name('home');
Route::get('/review', 'RouteController@review')->name('review');
Route::get('/topkeys', 'RouteController@topkeys')->name('topkeys');
Route::get('/about', 'RouteController@about')->name('about');
Route::get('/contacts', 'RouteController@contacts')->name('contacts');
Route::get('/getkey', 'RouteController@getkey')->name('getkey');
Route::get('/feedback', 'RouteController@feedback')->name('feedback');

Route::post('/getkey/register', 'RegisterController@getkey')->name('getkey.register');
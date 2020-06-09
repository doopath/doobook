<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/topkeys', function () {
    return view('top_keys');
})->name('topkeys');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/getkey', function () {
    return view('getkey');
})->name('getkey');

Route::get('/feedback', function () {
    return view('give_feedback');
})->name('feedback');

// Route::get('/', function () {
//     return view('index');
// });
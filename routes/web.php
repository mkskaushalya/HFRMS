<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/facilities', function () {
    return view('facilities');
});
Route::get('/reservation', function () {
    return view('reservation');
});



<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/about-us', function () {
    return view('pages.about');
});

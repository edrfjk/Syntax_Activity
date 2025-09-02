<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('index');
});

// Member pages
Route::get('/eidref', function () {
    return view('eidref');
});


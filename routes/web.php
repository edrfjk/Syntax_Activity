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

Route::get('/yuri', function () {
    return view('yuri');
});

Route::get('/sheran', function () {
    return view('sheran');
});

Route::get('/rayver', function () {
    return view('rayver');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hallo', function () {
    return view('hallo');
});

Route::get('/hallo', function () {
    return view('hallo');
});

Route::get('/hallo/apakabar', function () {
    return view('apakabar');
});

Route::get('/hallo/doni', function () {
    return view('doni');
});
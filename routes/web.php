<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/flessioni', function () {
    return view('flessioni');
});

Route::get('/trazzioni', function () {
    return view('trazzioni');
});
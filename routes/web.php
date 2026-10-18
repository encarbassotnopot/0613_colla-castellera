<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('benvinguda');
});

Route::get('/gammes', function () {
    return view('gammes');
});


Route::get('/calendari', function () {
    return view('calendari');
});


Route::get('/castellers', function () {
    return view('castellers');
});

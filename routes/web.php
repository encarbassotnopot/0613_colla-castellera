<?php

use App\Http\Controllers\CalendariController;
use App\Http\Controllers\CastellersController;
use App\Http\Controllers\GammesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('benvinguda');
});

Route::get('/gammes', [GammesController::class, 'index'])->name('gammes.index');
Route::post('/gammes', [GammesController::class, 'calcular'])->name('gammes.calcular');

Route::get('/calendari', [CalendariController::class, 'index'])->name('calendari.index');

Route::resource('castellers', CastellersController::class);

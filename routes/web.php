<?php

use App\Http\Controllers\AuthController;
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

Route::middleware('guest')->group(function () {
    Route::get('/registre', [AuthController::class, 'showRegistre'])
        ->name('show.registre');
    Route::post('/registre', [AuthController::class, 'registre'])
        ->name('registre');
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('show.login');
    Route::post('/login', [AuthController::class, 'login'])
        ->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});

Route::resource('castellers', CastellersController::class)->only(['index', 'show', 'create']);

Route::resource('castellers', CastellersController::class)->except(['index', 'show', 'create'])->middleware('auth');

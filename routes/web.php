<?php

use App\Http\Controllers\DestinoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PresidenteController;
use App\Http\Controllers\ViajeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/equipos', EquipoController::class);

Route::resource('/presidentes', PresidenteController::class);


<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);

// Ruta 1: Saludo simple
Route::get('/hola', function () {
    return '<h1>¡Hola! La ruta /hola está funcionando correctamente.</h1>';
});

// Ruta 2: Parámetro dinámico
Route::get('/saludo/{nombre}', function ($nombre) {
    return "<h1>¡Bienvenido/a, " . ucfirst($nombre) . "!</h1>";
});

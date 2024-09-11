<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NombreDelControlador;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ping', function () {
    return "pong";
});

Route::get('registrarse', [NombreDelControlador::class,"CargarVista"]);
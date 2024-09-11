<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NombreDelControlador;
use App\Http\Controllers\registro\registrarCtrl;

Route::get('/', function () {
    return view('welcome');
});

Route::get('registrarse', [registrarCtrl::class,"CargarVista"]);
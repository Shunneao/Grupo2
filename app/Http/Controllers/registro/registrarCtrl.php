<?php

namespace App\Http\Controllers\registro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registrarCtrl extends Controller
{
    public function CargarVista() {
        return view ("registrar");
    }
}

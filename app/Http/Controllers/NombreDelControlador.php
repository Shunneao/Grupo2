<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NombreDelControlador extends Controller
{
    public function CargarVista() {
        return view ("vista");
    }
}

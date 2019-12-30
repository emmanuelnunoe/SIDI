<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ingresoAInventarioController extends Controller
{
    public function index()
    {
        return view('/inventario/ingresoAInventario');
    }
}

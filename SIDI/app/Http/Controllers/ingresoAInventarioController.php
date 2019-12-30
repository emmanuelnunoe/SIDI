<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ingresoAInventarioController extends Controller
{
    public function index()
    {
        return view('/inventario/ingresoAInventario');
    }

    public function store(){
        $data = request()->validate([
            'numero_de_inventario'=>'required',
            'marca',
            'modelo',
            'serie'=>'required',
            'macAddress'=>'required',
            'ip'=>'required',
            'usuario_de_dominio'=>'required',
            'contrasena'=>'required',
            'ubicacion'=>'required',
            'sistema_operativo',
            'service_pack',
            'ultimo_mantenimiento'=>'required',
            'imagen',
        ]);

        return redirect('/home');
    }
}

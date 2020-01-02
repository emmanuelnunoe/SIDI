<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;

class inventarioController extends Controller
{
    public function index($user)
    {

     return view('inventario');
    }
    public function store(Request $request){

        Inventario::create($request->all());

    }
}

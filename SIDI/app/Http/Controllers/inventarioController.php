<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inventarioController extends Controller
{
    public function index($user)
    {

     return view('inventario');
    }
}

<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class inventarioController extends Controller
{
    public function index()
    {

        //$inventario = DB::table('inventarios')->select('numeroDeInventario')->get();
         $inventario = DB::table('inventarios')->get();
        return view('inventario.index',compact('inventario'));
    }


    public  function  create()
    {
        return view('inventario.create');
    }


    public function store(Request $request){

        Inventario::create($request->all());
        return redirect('/index');

    }
}

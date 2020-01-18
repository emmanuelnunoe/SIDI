<?php

namespace App\Http\Controllers;

use App\Computadoras;
use Illuminate\Http\Request;

class ComputadorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('computadoras.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computadoras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $datosComputadora =request()->all();
       $datosComputadora = request()->except('_token') ;

       if($request->hasFile('foto')){
           $datosComputadora['foto']=$request->file('foto')->store('uploads','public');
       }
       
       Computadoras::insert($datosComputadora);

       return response()->json($datosComputadora);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Computadoras  $computadoras
     * @return \Illuminate\Http\Response
     */
    public function show(Computadoras $computadoras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Computadoras  $computadoras
     * @return \Illuminate\Http\Response
     */
    public function edit(Computadoras $computadoras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Computadoras  $computadoras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Computadoras $computadoras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Computadoras  $computadoras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Computadoras $computadoras)
    {
        //
    }
}

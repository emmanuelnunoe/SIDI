<?php

namespace App\Http\Controllers;

use App\Computadoras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComputadorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['computadoras'] = Computadoras::paginate(5);
        return view('computadoras.index',$datos);

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
       $datosComputadora = request()->except('_token');

       if($request->hasFile('foto')){
           $datosComputadora['foto']=$request->file('foto')->store('uploads','public');
       }

       Computadoras::insert($datosComputadora);

      // return response()->json($datosComputadora);
      return redirect('computadoras')->with('Mensaje','Computadora agregada con éxito');
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
    public function edit($id)
    {
        $computadora= Computadoras::findOrFail($id);
        return view('computadoras.edit',compact('computadora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Computadoras  $computadoras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosComputadora = request()->except(['_token','_method']);


       if($request->hasFile('foto')){
      
        // Busca la información que coincida con el id 
        $computadora= Computadoras::findOrFail($id);
        // Borra la fotografia del id seleccionado
        Storage::delete('public/'.$computadora->foto);

        $datosComputadora['foto']=$request->file('foto')->store('uploads','public');
    }

    Computadoras::where('id','=',$id)->update($datosComputadora);
    

    //$computadora= Computadoras::findOrFail($id);
    //return view('computadoras.edit',compact('computadora'));
    return redirect('computadoras')->with('Mensaje','Computadora modificada con éxito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Computadoras  $computadoras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Busca la información que coincida con el id 
        $computadora= Computadoras::findOrFail($id);
        // Borra la fotografia del id seleccionado
       if(Storage::delete('public/'.$computadora->foto)){
             Computadoras::destroy($id);
       }
    
        //return redirect('computadoras');
        return redirect('computadoras')->with('Mensaje','Computadora eliminada');

    }
}

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
        /*reglas para validar campos excepto fotografia */
        $campos=[
            'tipo'=> 'boolean',
            'marca'=>'required|string|max:100',
            'modelo'=>'required|string|max:100',
            'numero_de_serie'=>'required|string|max:100',
            'centro_de_costos'=>'required|string|max:100',
            'año_adquisicion'=>'required|integer',
            'procedentcia'=>'required|enum',
            'host'=>'required|string|max:100',
            'direccion_mac'=>'required|macAddress|max:100',
            'direccion_ip'=>'required|ipAddress|max:100',
            'tipo_ip'=>'required|boolean',
            'internet'=>'required|boolean',
            'procesador'=>'required|string|max:100',
            'velocidad'=>'required|integer',
            'disco_duro'=>'required|integer',
            'ram'=>'required|integer',
            'sistema_operativo'=>'required|string|max:100',
            'edicion'=>'required|enum',
            'tipo_sistema'=>'required|boolean',
            'service_pack '=>'required|integer|max:100',
            'licencia_activa'=>'required|boolean',
            'marca_monito'=>'required|string|max:100',
            'modelo_monitor'=>'required|string|max:100',
            'serie_monitor'=>'required|string|max:100',

        ];

        /* validacion de fotografia  */

        if($request->hasFile('foto')){
            $campos+=['foto'=>'required|max:10000|mimes:jpeg,png,jpg'];

        }
        
        /* validacion de campos si el usuario omite un dato,
           muestra un mensaje dependiendo del campo que se omite*/
        $Mensaje=["required"=>'se requiere :attribute '];
        $this->validate($request,$campos,$Mensaje);


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



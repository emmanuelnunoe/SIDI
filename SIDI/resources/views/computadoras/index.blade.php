
@extends('layouts.app')
@include('layouts.sidebar')
@section('content')

<div class="form-wraper">

<div class="container">

<!-- ===========================================================
        Mensaje de alerta al modificar datos de computadora
     =========================================================== -->
@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje') }}
    
</div>
@endif

<title>Inventario | SIDI</title>
<a href="{{ url('computadoras/create')}}" class="btn btn-success">Agregar computadora</a>
</br>
</br>
<div class="cartas">
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Danger card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Warning card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
            <h5 class="card-title">Info card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
    </div>
</div>

<!-- ===========================================================
        Tabla para desplegar el listado de computadoras
        registradas en el inventario
     =========================================================== -->
<table class="table table-light table-hover">
   
<thead class="thead-light">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>marca</th>
            <th>modelo</th>
            <th>no. inventario</th>
            <th>ip</th>
            <th>mac</th>
            <th>acciones</th>

        </tr>

    </thead>

    <tbody>
        @foreach($computadoras as $computadora)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
            <img src="{{ asset('storage').'/'.$computadora->foto }}" class="img-thumbnail img-fluid" alt="" width="100">
            </td>
            <td>{{ $computadora->marca }}</td>
            <td>{{ $computadora->modelo }}</td>
            <td>{{ $computadora->NumeroDeInventario}}</td>
            <td>{{ $computadora->direccionIp }}</td>
            <td>{{ $computadora->macAddress }}</td>
            <td> 

            <a  class="btn btn-warning" href="{{ url('/computadoras/'.$computadora->id.'/edit') }}">
                Editar
            </a> 
                
            <form method="post" action="{{  url('/computadoras/'.$computadora->id) }} " style="display:inline">
            {{ @csrf_field() }}
            {{ method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick=" return confirm('¿Borrar?')">Borrar</button>
                
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{ $computadoras->links()}}
</div>
</div>
@endsection
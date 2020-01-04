@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        <h1>Ingreso a Inventario</h1>
        </br>

        <ul>
            @foreach($inventario as $equipo)
                <li>{{ $equipo->numeroDeInventario }}</li>
                @endforeach
        </ul>
    </div>
</div>
@endsection

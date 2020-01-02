@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        <h1>Ingreso a Inventario</h1>
        @foreach($nuevoInventario as $pc)
            <div class="col-4 pb-4">
                    <p> {{ $pc->numero_de_inventario}}" </p>
            </div>
        @endforeach

    </div>
</div>
@endsection

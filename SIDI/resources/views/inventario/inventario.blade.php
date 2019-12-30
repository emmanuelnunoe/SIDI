@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        @foreach($computadora as $pc)
            <div class="col-4 pb-4">
                    <p> {{ $pc->numero_de_serie}}" </p>
            </div>
        @endforeach


    </div>
</div>
@endsection

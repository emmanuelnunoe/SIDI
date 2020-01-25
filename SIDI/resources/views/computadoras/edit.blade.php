@extends('layouts.app')

@section('content')

<div class="container">

<title>Editar | SIDI</title>
<h1>Editar</h1>
<form action="{{ url('/computadoras/'.$computadora->id)}}" method="post" enctype="multipart/form-data">
    @csrf
   {{ method_field('PATCH') }}
 
   @include('computadoras.form',['Modo'=>'editar'])

</form>

</div>
@endsection
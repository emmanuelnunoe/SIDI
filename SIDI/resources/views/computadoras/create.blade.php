@extends('layouts.app')

@section('content')
@include('layouts.sidebar')

<div class="form-wraper">
<div class="container">

<!--
===========================================================================
Mensaje de error : se muestra si el usuario omite ingresar informacion
    en un campo.
===========================================================================
-->
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!--
===========================================================================
Fin Mensaje de error 
===========================================================================
-->

<title>Agregar | SIDI</title>

<!--
===========================================================================
Inicia Form
===========================================================================
-->
<form action="{{ url('/computadoras')}}"  class="form-horizontal" method="post" enctype="multipart/form-data">
    @csrf

    @include('computadoras.form',['Modo'=>'crear'])
    

</form>
<!--
===========================================================================
Termina Form
===========================================================================
-->
</div>
</div>
@endsection
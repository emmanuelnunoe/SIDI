@extends('layouts.app')

@section('content')
<div><h1>INSTITUTO MEXICANO DEL SEGURO SOCIAL</h1></div>
<div><h2>HOSPITAL GENERAL REGIONAL NO. 20</h2></div>
<nav><h3>Sistema de Inventario del Departamento de Informática</h3></nav>
<div class="green-background-imss">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="titulo-form">Iniciar sesión</div>
                    <div class="card-body">
                        <div class="logo">
                        <img src="{{ asset('storage/sidi/logo-imss.jpg') }}"></img>
                        </div>
                        <form method="POST" action="{{ route('login') }} ">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-10">
                                    <input id="email" type="email"
                                     class="form-control text-md-right  @error('email') is-invalid @enderror" 
                                     name="email" value="{{ old('email') }}" 
                                     required autocomplete="email" autofocus
                                     placeholder="Matricula">

                            </div>


                            <div class="form-group row">
                                <div class="col-md-10">
                                    <input id="password" type="password" 
                                    class="form-control text-md-right @error('password') is-invalid @enderror "
                                     name="password" required autocomplete="current-password"
                                     placeholder="Contraseña">

                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>


                                        <label class="form-check-label" for="remember">
                                            {{ __('Recordar') }}
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-11">
                                    <button type="submit" class="btn custom-btn">
                                        {{ __('Ingresar') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Recuperar contraseña') }}
                                        </a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </form>
                    <div class="loginBackground">
                        Holamundo
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h4>Tijuana Baja California, México</h4>
</div>
@endsection

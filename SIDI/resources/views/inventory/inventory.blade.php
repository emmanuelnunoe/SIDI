@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="#" class="form-group row">

                <div class="col-md-8">


                    <label for="marca" class="col-md-4 col-form-label ">marca</label>
                    <input id="marca"
                           type="text"
                           class="form-control
                    @error('marca') is-invalid @enderror"
                           value="{{ old('marca') }}"
                           required autocomplete="marca" autofocus>

                    @error('marca')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="modelo" class="col-md-4 col-form-label ">Modelo</label>
                    <input id="modelo"
                           type="text"
                           class="form-control
                    @error('modelo') is-invalid @enderror"
                           value="{{ old('modelo') }}"
                           required autocomplete="modelo" autofocus>


                    <label for="numeroDeInventario" class="col-md-5 col-form-label ">Numero de Inventario</label>
                    <input id="numeroDeInventario"
                           type="text"
                           class="form-control
                    @error('numeroDeInventario') is-invalid @enderror"
                           value="{{ old('numeroDeInventario') }}"
                           required autocomplete="numeroDeInventario" autofocus>

                    <label for="imagen" class="col-md-4 col-form-label ">Imagen</label>
                    <input id="imagen"
                           type="file"
                           class="form-control
                    @error('imagen') is-invalid @enderror" Model="imagen"
                           value="{{ old('imagen') }}"
                           required autocomplete="imagen" autofocus>
                </div>


            </form>
        </div>

    </div>
</div>
@endsection

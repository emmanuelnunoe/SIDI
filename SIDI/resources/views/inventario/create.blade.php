@extends('layouts.app')

@section('content')
<div class="container">
            <form action="/i" enctype="multipart/form-data" method="post" >
                @csrf
                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="row">
                            <h1>Ingreso a Inventario</h1>
                        </div>

                        <div class="form-group row">

                            <label for="numeroDeInventario" class="col-md-5 col-form-label ">Numero de Inventario</label>
                            <input id="numeroDeInventario"
                                   name="numeroDeInventario"
                                   type="text"
                                   class="form-control
                            @error('numeroDeInventario') is-invalid @enderror"
                                   value="{{ old('numeroDeInventario') }}"
                                   required autocomplete="numeroDeInventario" autofocus>

                          <!--  <label for="marca" class="col-md-4 col-form-label ">marca</label>
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

                            <label for="serie" class="col-md-4 col-form-label ">Serie</label>
                            <input id="serie"
                                   type="text"
                                   class="form-control
                            @error('serie') is-invalid @enderror"
                                   value="{{ old('serie') }}"
                                   required autocomplete="serie" autofocus>

                            <label for="macAddress" class="col-md-4 col-form-label ">Mac Address</label>
                            <input id="macAddress"
                                   type="text"
                                   class="form-control
                            @error('macAddress') is-invalid @enderror"
                                   value="{{ old('macAddress') }}"
                                   required autocomplete="macAddress" autofocus>


                            <label for="ip" class="col-md-4 col-form-label ">IP</label>
                            <input id="ip"
                                   type="text"
                                   class="form-control
                            @error('ip') is-invalid @enderror"
                                   value="{{ old('ip') }}"
                                   required autocomplete="ip" autofocus>

                            <label for="usuario_de_dominio" class="col-md-4 col-form-label ">Usuario de Dominio</label>
                            <input id="usuario_de_dominio"
                                   type="text"
                                   class="form-control
                            @error('usuario_de_dominio') is-invalid @enderror"
                                   value="{{ old('usuario_de_dominio') }}"
                                   required autocomplete="usuario_de_dominio" autofocus>


                            <label for="contrasena" class="col-md-4 col-form-label ">Contraseña</label>
                            <input id="contrasena"
                                   type="password"
                                   class="form-control
                            @error('contrasena') is-invalid @enderror"
                                   value="{{ old('contrasena') }}"
                                   required autocomplete="contrasena" autofocus>


                            <label for="ubicacion" class="col-md-4 col-form-label ">Ubicacion</label>
                            <input id="ubicacion"
                                   type="text"
                                   class="form-control
                            @error('ubicacion') is-invalid @enderror"
                                   value="{{ old('ubicacion') }}"
                                   required autocomplete="ubicacion" autofocus>

                            <label for="sistema_operativo" class="col-md-4 col-form-label ">Sistema Operativo</label>
                            <input id="sistema_operativo"
                                   type="text"
                                   class="form-control
                            @error('sistema_operativo') is-invalid @enderror"
                                   value="{{ old('sistema_operativo') }}"
                                   required autocomplete="sistema_operativo" autofocus>

                            <label for="service_pack" class="col-md-4 col-form-label ">Service Pack</label>
                            <input id="service_pack"
                                   type="number"
                                   class="form-control
                            @error('service_pack') is-invalid @enderror"
                                   value="{{ old('service_pack') }}"
                                   required autocomplete="service_pack" autofocus>


                            <label for="ultimo_mantenimiento" class="col-md-4 col-form-label ">Ultimo Mantenimiento</label>
                            <input id="ultimo_mantenimiento"
                                   type="date"
                                   class="form-control
                            @error('ultimo_mantenimiento') is-invalid @enderror"
                                   value="{{ old('ultimo_mantenimiento') }}"
                                   required autocomplete="utlimo_mantenimiento" autofocus>



                            <label for="imagen" class="col-md-4 col-form-label ">Imagen</label>
                            <input id="imagen"
                                   type="file"
                                   class="form-control
                            @error('imagen') is-invalid @enderror" Model="imagen"
                                   value="{{ old('imagen') }}"
                                   required autocomplete="imagen" autofocus>-->
                        </div>
                        <div class="row pt-4">
                            <button class="btn btn-primary">Add New Post</button>
                        </div>
                    </div>
                </div>
            </form>

</div>
@endsection

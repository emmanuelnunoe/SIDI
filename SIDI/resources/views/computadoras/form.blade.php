{{ $Modo== 'crear'? 'Agregar computadora':'Modificar computadora'}}

<div class="form-group">
    <label for = "marca" class="control-label"> {{ 'Marca'}}</label>

    <input type="text" class="form-control {{$errors->has('marca')?'is-invalid':''}}"
     name ="marca" id="marca" 
    value="{{ isset($computadora->marca)?$computadora->marca : old('marca') }}" >

    {!! $errors->first('marca','<div class="invalid-feedback">:message</div>') !!}
</div>




<div class="form-group">
    <label for = "modelo"  class="control-label"> {{ 'Modelo'}}</label>
    <input type="text"  class="form-control  {{$errors->has('modelo')?'is-invalid':''}} "
    name ="modelo" id="modelo"
    value="{{ isset($computadora->marca)?$computadora->modelo : old('modelo') }}"
    >

    {!! $errors->first('modelo','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
    <label for = "numeroDeInventario" class="control-label"> {{ 'No. Inventario'}}</label>
    <input type="text" class="form-control {{$errors->has('numeroDeInventario')?'is-invalid':''}}" 
    name ="numeroDeInventario" id="numeroDeInventario"
    value="{{ isset($computadora->marca)?$computadora->NumeroDeInventario : old('numeroDeInventario')}}"
    >

    {!! $errors->first('NumeroDeInventario','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group" >
    <label for = "direccionIp"  class="control-label"> {{ 'IP'}}</label>
    <input type="text" class="form-control {{$errors->has('direccionIp')?'is-invalid':''}}"
     name ="direccionIp" id="direccionIp"
    value="{{ isset($computadora->marca)?$computadora->direccionIp: old('direccionIp')}}"
    >

    {!! $errors->first('direccionIp','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group" >
    <label for = "macAddress" class="control-label"> {{ 'MAC'}}</label>
    <input type="text" class="form-control {{$errors->has('macAddress')?'is-invalid':''}}"
     name ="macAddress" id="macAddress"
    value="{{ isset($computadora->marca)?$computadora->macAddress: old('macAddress') }}"
    >

    {!! $errors->first('macAddress','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group" >
    <label for = "foto" class="control-label"> {{ 'F    oto' }}</label>

    @if(isset($computadora->foto ))
    <br/>
    <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$computadora->foto }}" alt="" width="200">
    <br/>
    @endif
    <input type="file" class="form-control {{$errors->has('foto')?'is-invalid':''}}"
     name ="foto" id="foto" value="">

     {!! $errors->first('foto','<div class="invalid-feedback">:message</div>') !!}

</div>

    <input type="submit" class="btn btn-success" value="{{ $Modo== 'crear'? 'Agregar':'Modificar'}}">
    <a class="btn btn-primary" href="{{ url('computadoras')}}">Regresar</a>
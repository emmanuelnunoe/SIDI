{{ $Modo== 'crear'? 'Agregar computadora':'Modificar computadora'}}

<label for = "marca"> {{ 'marca'}}</label>
    <input type="text" name ="marca" id="marca" 
    value="{{ isset($computadora->marca)?$computadora->marca:'' }}" >
    </br>
    
    <label for = "modelo"> {{ 'modelo'}}</label>
    <input type="text" name ="modelo" id="modelo"
    value="{{ isset($computadora->marca)?$computadora->modelo:'' }}"
    >
    </br>

    <label for = "foto"> {{ 'foto' }}</label>

    @if(isset($computadora->foto ))
    <br/>
    <img src="{{ asset('storage').'/'.$computadora->foto }}" alt="" width="200">
    <br/>
    @endif
    <input type="file" name ="foto" id="foto" value="">
    </br>

    <label for = "numeroDeInventario"> {{ 'numeroDeInventario'}}</label>
    <input type="text" name ="numeroDeInventario" id="numeroDeInventario"
    value="{{ isset($computadora->marca)?$computadora->NumeroDeInventario:'' }}"
    >
    </br>

    <label for = "direccionIp"> {{ 'direccionIp'}}</label>
    <input type="text" name ="direccionIp" id="direccionIp"
    value="{{ isset($computadora->marca)?$computadora->direccionIp:'' }}"
    >
    </br>

    <label for = "macAddress"> {{ 'macAddress'}}</label>
    <input type="text" name ="macAddress" id="macAddress"
    value="{{ isset($computadora->marca)?$computadora->macAddress:'' }}"
    >
    </br>


    <input type="submit" value="{{ $Modo== 'crear'? 'Agregar':'Modificar'}}">
    <a href="{{ url('computadoras')}}">Regresar</a>
<title>Editar | SIDI</title>
<h1>Editar</h1>
<form action="{{ url('/computadoras/'.$computadora->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

<label for = "marca"> {{ 'marca'}}</label>
    <input type="text" name ="marca" id="marca" value="{{ $computadora->marca }}">
    </br>
    
    <label for = "modelo"> {{ 'modelo'}}</label>
    <input type="text" name ="modelo" id="modelo" value="{{ $computadora->modelo}}">
    </br>

    <label for = "numeroDeInventario"> {{ 'numeroDeInventario'}}</label>
    <input type="text" name ="numeroDeInventario" id="numeroDeInventario" value="{{ $computadora->NumeroDeInventario}}">
    </br>

    <label for = "direccionIp"> {{ 'direccionIp'}}</label>
    <input type="text" name ="direccionIp" id="direccionIp" value="{{ $computadora->direccionIp }}">
    </br>

    <label for = "macAddress"> {{ 'macAddress'}}</label>
    <input type="text" name ="macAddress" id="macAddress" value="{{ $computadora->macAddress }}">
    </br>

    <label for = "foto"> {{'foto'}}</label>
    <br/>
    <img src="{{ asset('storage').'/'.$computadora->foto }}" alt="" width="200">
    <br/>
    <input type="file" name ="foto" id="foto" value="{{ $computadora->foto }}">
    </br>

    <input type="submit" value="Modificar">
    <a href="{{ url('computadoras')}}">Regresar</a>


</form>
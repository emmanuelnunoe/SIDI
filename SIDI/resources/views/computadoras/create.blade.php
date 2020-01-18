Seccion para crear computadoras
<form action="{{ url('/computadoras')}}" method="post" enctype="multipart/form-data">
    @csrf

     <label for = "marca"> {{ 'marca'}}</label>
    <input type="text" name ="marca" id="marca" value="">
    </br>
    
    <label for = "modelo"> {{ 'modelo'}}</label>
    <input type="text" name ="modelo" id="modelo" value="">
    </br>

    <label for = "foto"> {{ 'foto'}}</label>
    <input type="file" name ="foto" id="foto" value="">
    </br>

    <label for = "numeroDeInventario"> {{ 'numeroDeInventario'}}</label>
    <input type="text" name ="numeroDeInventario" id="numeroDeInventario" value="">
    </br>

    <label for = "direccionIp"> {{ 'direccionIp'}}</label>
    <input type="text" name ="direccionIp" id="direccionIp" value="">
    </br>

    <label for = "macAddress"> {{ 'macAddress'}}</label>
    <input type="text" name ="macAddress" id="macAddress" value="">
    </br>





    <input type="submit" value="agregar">
</form>
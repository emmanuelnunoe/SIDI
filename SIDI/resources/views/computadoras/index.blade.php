Inicio (Despliegue de datos)
<table class="table table-light">
   
<thead class="thead-light">
        <tr>
            <th>#</th>
            <th>marca</th>
            <th>modelo</th>
            <th>foto</th>
            <th>no. inventario</th>
            <th>ip</th>
            <th>mac</th>
            <th>acciones</th>

        </tr>

    </thead>

    <tbody>
        @foreach($computadoras as $computadora)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $computadora->marca }}</td>
            <td>{{ $computadora->modelo }}</td>
            <td>{{ $computadora->foto }}</td>
            <td>{{ $computadora->NumeroDeInventario}}</td>
            <td>{{ $computadora->direccionIp }}</td>
            <td>{{ $computadora->macAddress }}</td>
            <td> Editar | 
                
            <form method="post" action="{{  url('/computadoras/'.$computadora->id) }} ">
            {{ @csrf_field() }}
            {{ method_field('DELETE')}}
            <button type="submit" onclick=" return confirm('¿Borrar?')">Borrar</button>
                
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
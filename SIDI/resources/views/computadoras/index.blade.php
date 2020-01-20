@if(Session::has('Mensaje')){{ 
    Session::get('Mensaje')

}}
@endif
<a href="{{ url('computadoras/create')}}">Agregar empleado</a>

<table class="table table-light">
   
<thead class="thead-light">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>marca</th>
            <th>modelo</th>
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
            <td>
            <img src="{{ asset('storage').'/'.$computadora->foto }}" alt="" width="200">
            </td>
            <td>{{ $computadora->marca }}</td>
            <td>{{ $computadora->modelo }}</td>
            <td>{{ $computadora->NumeroDeInventario}}</td>
            <td>{{ $computadora->direccionIp }}</td>
            <td>{{ $computadora->macAddress }}</td>
            <td> 

            <a href="{{ url('/computadoras/'.$computadora->id.'/edit') }}">
                Editar
            </a>
            | 
                
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
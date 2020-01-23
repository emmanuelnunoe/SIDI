Seccion para crear computadoras
<form action="{{ url('/computadoras')}}" method="post" enctype="multipart/form-data">
    @csrf

    @include('computadoras.form',['Modo'=>'crear'])
    

</form>
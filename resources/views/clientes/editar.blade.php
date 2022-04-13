@extends("layout")

@section("contenido")
    <fieldset>
        <legend>Editando loa valores de {{$cliente->nombre}}</legend>
    <form action="{{route("clientes.update",$cliente->id)}}" method="POST">
        @csrf
        @method('PUT')
        Nombre <input type="text" value ={{$cliente->nombre}} name="nombre" id=""><br />
        Apellido <input type="text" value ={{$cliente->apellido}} name="apellido" id=""><br />
        Dirección <input type="text" value ={{$cliente->direccion}} name="direccion" id=""><br />
        Edad <input type="text" value ={{$cliente->edad}} name="edad" id=""><br />
        Email <input type="text" value ={{$cliente->email}} name="email" id=""><br />
        <input type="submit" value="Actualizar">
    </form>
    </fieldset>

@endsection

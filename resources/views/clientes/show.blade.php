@extends("layout")
@section("menu")
    <a href="{{route("clientes.index")}}">Volver</a>
@endsection
@section("contenido")
    <fieldset>
        <legend>Datos del cleinte {{$cliente->nombre}}</legend>
        <h3>Nombre {{$cliente->nombre}}</h3>
        <h3>Apellido {{$cliente->apellido}}</h3>
        <h3>Dirección {{$cliente->direccion}}</h3>
        <h3>Email {{$cliente->email}}</h3>
    </fieldset>
@endsection

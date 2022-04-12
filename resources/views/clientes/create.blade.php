@extends("layout")

@section("contenido")
    <fieldset>
        <fieldset></fieldset>
    <form action="{{route("clientes.store")}}" method="POST">
        @csrf
        Nombre <input type="text" name="nombre" id=""><br />
        Apellido <input type="text" name="apellido" id=""><br />
        Dirección <input type="text" name="direccion" id=""><br />
        Edad <input type="text" name="edad" id=""><br />
        Email <input type="text" name="email" id=""><br />
        <input type="submit" value="Guardar">
    </form>
    </fieldset>

@endsection

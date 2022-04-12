@extends("layout")
@section("menu")
    <a href="{{route("clientes.create")}}">Nuevo cliente</a>
@endsection
@section("contenido")
    <h1>Listado de clientes</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Email</th>
            <th>edad</th>
        </tr>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->edad}}</td>
            </tr>
        @endforeach
    </table>




@endsection

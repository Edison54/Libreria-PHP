@extends('layout')

@section('title', "Mostrar clientes")

@section('content')








    <div class="contenedor">
        <h1>{{ $cliente->nombre }}</h1>

        <a class="link" href="{{ route('cliente.edit', $cliente) }}">Editar</a>

        <div class="contenedor">
            <a href="{{ route('cliente.index') }}" class="link">volver</a>
        </div>

        <form action="{{ route('cliente.destroy', $cliente) }}" method="POST">
            @csrf
            @method('DELETE')

            <input type="submit" value="Eliminar">
        </form>
        <p>ID: {{ $cliente->ID }}</p>
        <p>Nombre : {{ $cliente->nombre }}</p>
        <p>Apellidos: {{ $cliente->apellidos }}</p>
        <p>Direccion domicilio: {{ $cliente->direccion }}</p>
        <p>Telefono: {{ $cliente->telefono }}</p>
        <p>Email: {{ $cliente->email }}</p>


    </div>
@endsection

@extends('layout')

@section('title', "Editar CLIENTE")

@section('content')


    <div class="form">
        <h1>Editar cliente</h1>

        <form action="{{ route('cliente.update', $cliente) }}" method="POST">
            <div class="contenedor">
            <a class="link" href="{{ route('cliente.show', $cliente) }}">Volver</a>
            </div>
                @csrf
            @method('PATCH')

            <label for="ID">Cedula</label>
            <input type="number" name="ID" value="{{ $cliente->ID }}" readonly>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ $cliente->nombre }}">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="{{ $cliente->apellidos }}">

            <label for="direccion">Direccion domicilio</label>
            <input type="text" name="direccion" value="{{ $cliente->direccion }} ">

            <label for="telefono">Telefono</label>
            <input type="number" name="telefono" value="{{ $cliente->telefono }}">

            <label for="email">Telefono</label>
            <input type="text" name="email" value="{{ $cliente->telefono }}">

            <input type="submit" value="Actualizar">

        </form>
    </div>

@endsection

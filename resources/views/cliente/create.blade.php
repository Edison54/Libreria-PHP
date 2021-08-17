@extends('layout')

@section('title', "Insertar cliente")

@section('content')




    <div class="form">
        <h1>Insertar un cliente</h1>

        <form action="{{ route('cliente.store') }}" method="POST">

            <div class="contenedor">
            <a href="{{ route('cliente.index') }}" class="link">volver</a>
                </div>
            @csrf
            <label for="ID">ID cliente</label>
            <input type="number" name="ID">

            <label for="nombre">Nombre </label>
            <input type="text" name="nombre">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">

            <label for="direccion">Direccion</label>
            <input type="text" name="direccion">

            <label for="telefono">Telefono</label>
            <input type="text" name="telefono">

            <label for="email">Email</label>
            <input type="text" name="email">


            <input type="submit" value="Insertar">


        </form>
    </div>

@endsection

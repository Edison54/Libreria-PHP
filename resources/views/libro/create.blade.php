@extends('layout')

@section('title', "Insertar libro")

@section('content')




    <div class="form">
        <h1>Insertar un libro</h1>

        <form action="{{ route('libro.store') }}" method="POST">

            <div class="contenedor">
            <a href="{{ route('libro.index') }}" class="link">volver</a>
                </div>
            @csrf
            <label for="isbm">Codigo ISBM</label>
            <input type="number" name="isbm">

            <label for="nombre">Nombre </label>
            <input type="text" name="nombre">

            <label for="autor">Autor</label>
            <input type="text" name="autor">

            <label for="precio">Precio</label>
            <input type="text" name="precio">

            <label for="fecha">Fecha de creacion</label>
            <input type="text" name="fecha">


            <input type="submit" value="Insertar">


        </form>
    </div>

@endsection

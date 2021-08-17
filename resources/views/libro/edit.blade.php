@extends('layout')

@section('title', "Editar Comida")

@section('content')


    <div class="form">
        <h1>Editar cliente</h1>

        <form action="{{ route('libro.update', $libro) }}" method="POST">

            <a class="link" href="{{ route('libro.show', $libro) }}">Volver</a>
            @csrf
            @method('PATCH')

            <label for="isbm">Codigo ISBM</label>
            <input type="number" name="isbm" value="{{ $libro->isbm }}" readonly>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ $libro->nombre }}">

            <label for="autor">Autor</label>
            <input type="text" name="autor" value="{{ $libro->autor }}">

            <label for="precio">Precio</label>
            <input type="number" name="precio" value="{{ $libro->precio }}">

            <label for="fecha">Fecha de creacion</label>
            <input type="text" name="fecha" value="{{ $libro->direccion }}">

            <input type="submit" value="Actualizar">

        </form>
    </div>

@endsection

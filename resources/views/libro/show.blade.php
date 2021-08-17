@extends('layout')

@section('title', "Mostrar clientes")

@section('content')













    <div class="contenedor">
        <h1>{{ $libro->nombre }}</h1>

        <a class="link" href="{{ route('libro.edit', $libro) }}">Editar</a>

        <div class="contenedor">
            <a href="{{ route('libro.index') }}" class="link">volver</a>
        </div>

        <form action="{{ route('libro.destroy', $libro) }}" method="POST">
            @csrf
            @method('DELETE')

            <input type="submit" value="Eliminar">
        </form>
        <p>ISBM: {{ $libro->isbm }}</p>
        <p>Nombre : {{ $libro->nombre }}</p>
        <p>Autor: {{ $libro->autor }}</p>
        <p>Precio: {{ $libro->precio }}</p>
        <p>Fecha de creacion: {{ $libro->fecha }}</p>


    </div>
@endsection

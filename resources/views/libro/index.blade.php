@extends('layout')

@section('title', "Comidas")

@section('content')



    <div class="contenedor">
        <h1>Libros</h1>

        <a href="{{ route('libro.create') }}" class="link">Insertar libro</a>
        <a href="{{ route('home') }}" class="link">inicio</a>

        <ul class="lista-empleados">
            @forelse($libro as $libro)
                <li><a class="show-link" href="{{ route('libro.show', $libro) }}">{{ $libro->nombre  }}<p>{{ $libro->isbm  }}</p></a></li>

            @empty
                <li>No hay libros para mostrar</li>
            @endforelse
        </ul>
    </div>
@endsection

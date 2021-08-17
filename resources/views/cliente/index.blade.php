@extends('layout')

@section('title', "Comidas")

@section('content')



    </body>





    <div class="contenedor">
        <h1>Clientes</h1>

        <a href="{{ route('cliente.create') }}" class="link">Insertar cliente</a>
        <a href="{{ route('home') }}" class="link">inicio</a>

        <ul class="lista-empleados">
            @forelse($cliente as $cliente)
                <li><a class="show-link" href="{{ route('cliente.show', $cliente) }}">{{ $cliente->nombre  }}<p>{{ $cliente->ID  }}</p></a></li>

            @empty
                <li>No hay clientes para mostrar</li>
            @endforelse
        </ul>
    </div>
@endsection

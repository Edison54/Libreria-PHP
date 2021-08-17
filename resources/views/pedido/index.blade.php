@extends('layout')

@section('title', "pedidos")

@section('content')



    <div class="contenedor">
        <h1>Pedidos</h1>

        <a href="{{ route('pedido.create') }}" class="link">Insertar pedido</a>
        <a href="{{ route('home') }}" class="link">inicio</a>

        <ul class="lista-empleados">
            @forelse($pedido as $pedido)
                <li><a class="show-link" href="{{ route('pedido.show', $pedido) }}">{{ $pedido->ID  }}<p>{{ $pedido->isbmLibro }}</p></a></li>

            @empty
                <li>No hay pedidos para mostrar</li>
            @endforelse
        </ul>
    </div>
@endsection

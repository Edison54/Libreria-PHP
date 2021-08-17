@extends('layout')

@section('title', "Mostrar clientes")

@section('content')













    <div class="contenedor">
        <h1>{{ $pedido->nombre }}</h1>

        <a class="link" href="{{ route('pedido.edit', $pedido) }}">Editar</a>

        <div class="contenedor">
            <a href="{{ route('pedido.index') }}" class="link">volver</a>
        </div>

        <form action="{{ route('pedido.destroy', $pedido) }}" method="POST">
            @csrf
            @method('DELETE')

            <input type="submit" value="Eliminar">
        </form>
        <p>ID pedido: {{ $pedido->ID }}</p>
        <p>Cantidad a llevar : {{ $pedido->cantidad }}</p>
        <p>Total pedido: {{ $pedido->total }}</p>
        <p>Fecha del pedido: {{ $pedido->fecha }}</p>
        <p>ISBM del libro: {{ $pedido->isbmLibro }}</p>
        <p>ID del cliente: {{ $pedido->IDcliente }}</p>

    </div>
@endsection

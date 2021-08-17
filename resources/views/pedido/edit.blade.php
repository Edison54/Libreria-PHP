@extends('layout')

@section('title', "Editar pedidos")

@section('content')


    <div class="form">
        <h1>Editar pedidos</h1>

        <form action="{{ route('pedido.update', $pedido) }}" method="POST">

            <a class="link" href="{{ route('pedido.show', $pedido) }}">Volver</a>
            @csrf
            @method('PATCH')

            <label for="ID">ID pedido</label>
            <input type="number" name="ID" value="{{ $pedido->ID }}" readonly>

            <label for="cantidad">Cantidad a llevar </label>
            <input type="text" name="cantidad" value="{{ $pedido->cantidad }}">

            <label for="total">Total pedido</label>
            <input type="text" name="total" value="{{ $pedido->total }}">

            <label for="fecha">Fecha del pedido</label>
            <input type="text" name="fecha" value="{{ $pedido->fecha }}">

            <label for="isbmLibro">ISBM del libro</label>
            <input type="text" name="isbmLibro" value="{{ $pedido->isbmLibro }}">

            <label for="IDcliente">ID del cliente</label>
            <input type="text" name="IDcliente" value="{{ $pedido->IDcliente }}">

            <input type="submit" value="Actualizar">

        </form>
    </div>

@endsection

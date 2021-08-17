@extends('layout')

@section('title', "Insertar pedido")

@section('content')




    <div class="form">
        <h1>Hacer un pedido</h1>

        <form action="{{ route('pedido.store') }}" method="POST">

            <div class="contenedor">
            <a href="{{ route('pedido.index') }}" class="link">volver</a>
                </div>
            @csrf
            <label for="ID">ID pedido</label>
            <input type="number" name="ID">

            <label for="cantidad">Cantidad a llevar</label>
            <input type="text" name="cantidad">

            <label for="total">Total pedido</label>
            <input type="number" name="total">

            <label for="fecha">Fecha del pedido</label>
            <input type="text" name="fecha">

            <label for="isbmLibro">ISBM del libro</label>
            <input type="number" name="isbmLibro">

            <label for="IDcliente">ID del cliente</label>
            <input type="number" name="IDcliente">

            <input type="submit" value="Insertar">


        </form>
    </div>

@endsection

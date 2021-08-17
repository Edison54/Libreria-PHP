
@extends('layout')
@section('title', "Inicio")

@section('content')

    @csrf



    </body>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class="contenedor">
        <h1>Inicio</h1>
        <a href="{{ route('cliente.index') }}" class="link">Ver clientes</a>
        <a href="{{ route('libro.index') }}" class="link">Editar libros</a>
        <a href="{{ route('pedido.index') }}" class="link">Hacer pedido</a>


</div>
@endsection

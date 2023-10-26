@extends('layout')

@section('title', 'Clientes - Mercado')

@section('content')
    <h1>Clientes</h1>
    <a href="{{ route('clientes.verClientesIndex') }}">Clientes cadastrados</a>
    <a href="">Novo cliente</a>
    <a href="">Dividas em aberto</a>
@endsection
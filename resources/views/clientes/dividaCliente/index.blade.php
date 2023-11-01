@extends('layout')

@section('title', 'Cliente Dívida - Mercado')
@section('content')
<h1>oi</h1>
<h4>{{ $cliente->nome }}</h4>
<p>{{ $cliente->info_contato }}</p>
<p>{{ $cliente->divida->descricao_divida }}</p>
<p>{{ $cliente->divida->descricao_divida }}</p>
<p>{{ $cliente->divida->total_divida }}</p>
@endsection
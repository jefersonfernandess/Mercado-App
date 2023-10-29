@extends('layout')

@section('title', 'Clientes cadastrados - Mercado')

@section('content')
    <div class="container">
        <h1>Clientes cadastrados</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Info. Contato</th>
                    <th scope="col">Débito em aberto</th>
                    <th scope="col"><a href="{{ route('clientes.cadastrarNovoCliente') }}">Adicionar novo cliente</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->info_contato }}</td>
                        @if ($cliente->debito_em_aberto === 0)
                        <td>Não, sem dividas</td>
                        @else
                        <td>Sim, <a href="#">vizualizar dívida</a></td>
                        @endif
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layout')

@section('title', 'Clientes cadastrados - Mercado')
<link rel="stylesheet" href="css/cliente/todosClientesPage.css">
@section('content')
    <div class="container">
        <div class="header_container d-flex flex-row justify-content-between align-items-center">
            <h1>Clientes cadastrados</h1>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Adicionar cliente
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Novo cliente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <p>O cliente tem <b>dívida</b>?</p>
                                <a href="" class="btn btn-info">Sim</a>
                                <a href="{{ route('clientes.cadastrarNovoCliente') }}" class="btn btn-warning">Não</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark   " data-bs-dismiss="modal">Sair</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Info. Contato</th>
                    <th scope="col">Débito em aberto</th>
                    <th scope="col"></th>
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
                            <td>Sim, <a href="{{ route('clientes.showDivida', $cliente->id) }}">vizualizar dívida</a>
                            </td>
                        @endif
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection

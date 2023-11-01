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
                                <a href="{{ route('clientes.cadastrarNovoClienteComDivida') }}" class="btn btn-info">Sim</a>
                                <a href="{{ route('clientes.cadastrarNovoCliente') }}" class="btn btn-warning">Não</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Sair</button>
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
                            <td class="d-flex gap-2">  
                                <div>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editClienteSemDivida-{{$cliente->id}}"> Editar</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editClienteSemDivida-{{$cliente->id}}" tabindex="-1"
                                    aria-labelledby="editClienteSemDivida" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editClienteSemDivida">Editar cliente sem divida
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="content">
                                                    <div class="main-content">
                                                        <form action="{{ route('clientes.updateClientes', ['id' => $cliente->id]) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <div class="main-content_itens">
                                                                <label for="nome">Nome:</label>
                                                                <input type="text" id="nome" name="nome"
                                                                    value="{{ $cliente->nome }}" required>
                                                            </div>
                                                            <div class="main-content_itens">
                                                                <label for="info_contato">Informações de contao:</label>
                                                                <input type="text" id="info_contato" name="info_contato"
                                                                    value="{{ $cliente->info_contato }}">
                                                            </div>
                                                            <div class="main-content_itens">
                                                                <input type="radio" id="debito_em_aberto"
                                                                    name="debito_em_aberto" value="0" checked hidden>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Sair</button>
                                                <button type="submit" class="btn btn-success">Atualizar cliente</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div>
                                    <form action="{{ route('clientes.destroyClientes', $cliente->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Apagar</button>
                                    </form>
                                </div>
                            </td>
                            <td>
                                
                            </td>
                        @else
                            <td>Sim, <a href="{{ route('clientes.showDivida', $cliente->id) }}">vizualizar dívida</a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#editClienteComDivida-{{$cliente->id}}"> Editar</button>
                                <!-- Modal -->
                                <div class="modal fade" id="editClienteComDivida-{{$cliente->id}}" tabindex="-1"
                                    aria-labelledby="editClienteComDivida" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editClienteComDivida">Editar cliente com divida
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="content">
                                                    <div class="main-content">
                                                        <form action="{{ route('clientes.updateClientes', $cliente->id) }}" method="POST">
                                                            @csrf
                                                            @method('put')
                                                            <div class="main-content_itens">
                                                                <label for="nome">Nome:</label>
                                                                <input type="text" id="nome" name="nome"
                                                                    value="{{ $cliente->nome }}">
                                                            </div>
                                                            <div class="main-content_itens">
                                                                <label for="info_contato">Informações de contao:</label>
                                                                <input type="text" id="info_contato" name="info_contato" value="{{ $cliente->info_contato }}">
                                                            </div>
                                                            <div class="main-content_itens">
                                                                <label for="descricao_divida">Descrição da dívida:</label>
                                                                <input type="text" id="descricao_divida"
                                                                    name="descricao_divida"
                                                                    value="{{ $cliente->divida->descricao_divida }}">
                                                            </div>
                                                            <div class="main-content_itens">
                                                                <label for="total_divida">Total dívida:</label>
                                                                <input type="text" id="total_divida"
                                                                    name="total_divida"
                                                                    value="{{ $cliente->divida->total_divida }}">
                                                            </div>
                                                            <div class="main-content_itens">
                                                                <input type="radio" id="debito_em_aberto"
                                                                    name="debito_em_aberto" value="1" checked hidden>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Sair</button>
                                                <button type="submit" class="btn btn-success">Atualizar cliente</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

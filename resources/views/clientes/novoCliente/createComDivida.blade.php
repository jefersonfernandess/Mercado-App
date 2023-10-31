@extends('layout')
@section('title', 'Cadastrar cliente - Mercado')
<link rel="stylesheet" href="/css/cliente/cadastroClienteComDivida.css">
@section('content')
    <div class="content">
        <div class="main-content">
            <form action="{{ route('clientes.storeClientes') }}" method="POST">
                @csrf
                <div class="main-content_itens">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome">
                </div>
                <div class="main-content_itens">
                    <label for="info_contato">Informações de contao:</label>
                    <input type="text" id="info_contato" name="info_contato">
                </div>
                <div class="main-content_itens">
                    <label for="descricao_divida">Descrição da dívida:</label>
                    <input type="text" id="descricao_divida" name="descricao_divida">
                </div>
                <div class="main-content_itens">
                    <label for="total_divida">Total dívida:</label>
                    <input type="text" id="total_divida" name="total_divida">
                </div>
                <div class="main-content_itens">
                    <input type="radio" id="debito_em_aberto" name="debito_em_aberto" value="1" checked hidden>
                </div>
                <div class="main-content_itens">
                    <button type="submit">Cadastrar cliente</button>
                </div>
            </form>
        </div>
    </div>
@endsection

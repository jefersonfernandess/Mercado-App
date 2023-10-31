@extends('layout')
@section('title', 'Cadastrar cliente - Mercado')
<link rel="stylesheet" href="/css/cliente/cadastroClienteSemDivida.css">
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
                    <input type="radio" id="debito_em_aberto" name="debito_em_aberto" value="0" checked hidden>
                </div>
                <div class="main-content_itens">
                    <button type="submit">Cadastrar cliente</button>
                </div>
            </form>
        </div>
    </div>
@endsection

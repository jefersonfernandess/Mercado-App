
@extends('layout')

@section('title', 'Clientes - Mercado')
<link rel="stylesheet" href="css/cliente/index.css">
@section('content')
    <main class="main-content">
        <section class="main_sections">
            <a href="{{ route('clientes.verClientesIndex') }}" class="main_section_content main_content_clientesCadastrados text-center">
                <h2>Clientes cadastrados</h2>
            </a>
            <a href="" class="main_section_content main_content_dividasEmAberto text-center">
                <h2>Dividas em aberto</h2>
            </a>
            <a href="{{ route('clientes.cadastrarNovoCliente') }}" class="main_section_content main_content_novoCliente text-center">
                <h2>Novo cliente</h2>
            </a>
            <a href="" class="main_section_content main_content_Clientes text-center">
                <h2></h2>
            </a>
        </section>

    </main>
@endsection

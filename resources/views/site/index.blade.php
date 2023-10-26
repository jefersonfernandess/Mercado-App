@extends('layout')

@section('title', 'Home - Mercado')
<link rel="stylesheet" href="css/site/index.css">
@section('content')
    <main class="main-content">
        <section class="main_sections">
            <a href="" class="main_section_content main_content_novaCompra text-center">
                <h2>Nova compra</h2>
            </a>
            <a href="" class="main_section_content main_content_historicoCompras text-center">
                <h2>Historico de compras</h2>
            </a>
            <a href="{{ route('produtos.index') }}" class="main_section_content main_content_produto text-center">
                <h2>Produtos</h2>
            </a>
            <a href="{{ route('clientes.index') }}" class="main_section_content main_content_Clientes text-center">
                <h2>Clientes</h2>
            </a>
        </section>

    </main>
@endsection

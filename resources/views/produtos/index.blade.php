@extends('layout')

@section('title', 'Produtos - Mercado')
<link rel="stylesheet" href="css/produto/index.css">
@section('content')
    <main class="container main_content">
        <section class="main_content_header mt-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar novo produto</button>
        </section>
        <table class="table table-striped">
            <thead class="">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descriçao</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Código de barras</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($produtos as $produto)
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>{{ $produto->codigo_de_barras }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </main>
    @include('produtos.modal.create')
@endsection

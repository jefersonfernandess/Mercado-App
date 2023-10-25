@extends('layout')

@section('title', 'Produtos - Mercado')
<link rel="stylesheet" href="css/produto/index.css">
@section('content')
    <main class="container main_content">
        <section class="main_content_header mt-2">

        </section>
        <table class="table table-striped">
            <thead >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descriçao</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Código de barras</th>
                    <th scope="col">
                        <button type="button" class="btn-add" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Adicionar novo produto</button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>{{ $produto->codigo_de_barras }}</td>
                        <td>
                            <!--Editar-->
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editmodal-{{ $produto->id }}" data-bs-whatever="@mdo">Editar</button>
                            @include('produtos.modal.edit')
                            <!--Apagar-->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#apagar-{{ $produto->id }}" data-bs-whatever="@mdo">Apagar</button>
                            <!--Modal apagar-->
                            @include('produtos.modal.destroy')

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    @include('produtos.modal.create')
@endsection

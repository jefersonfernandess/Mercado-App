
@extends('layout')

@section('title', 'Clientes - Mercado')
<link rel="stylesheet" href="css/cliente/index.css">
@section('content')
    <main class="main-content">
        <section class="main_sections">
            <a href="{{ route('clientes.verClientesTodos') }}" class="main_section_content main_content_clientesCadastrados text-center">
                <h2>Clientes cadastrados</h2>
            </a>
            <a href="" class="main_section_content main_content_dividasEmAberto text-center">
                <h2>Dividas em aberto</h2>
            </a>
            <!-- Button trigger modal -->
            <button type="button" class="main_section_content main_content_novoCliente text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Adicionar cliente   
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Novo cliente</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <p>O cliente tem <b>dívida</b>?</p>
                            <a href="{{ route('clientes.cadastrarNovoClienteComDivida') }}" class="btn btn-info">Sim</a>
                            <a href="{{ route('clientes.cadastrarNovoCliente') }}" class="btn btn-warning">Não</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark   " data-bs-dismiss="modal">Sair</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="main_section_content main_content_Clientes text-center">
                <h2></h2>
            </a>
        </section>

    </main>
@endsection

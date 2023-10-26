@extends('layout')

@section('title', 'Cadastrar cliente - Mercado')

@section('content')
    <div class="container">
        <form action="{{ route('clientes.storeClientes') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
            </div>
            <div class="row mb-3">
                <label for="infoContato" class="col-sm-2 col-form-label">Info. Contato (Opcional)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="infoContato" name="info_contato">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Débito em aberto</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="debito_em_aberto" id="false" value="0" checked>
                        <label class="form-check-label" for="false">
                            Não
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="debito_em_aberto" id="true" value="1">
                        <label class="form-check-label" for="true">
                            Sim
                        </label>
                    </div>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
@endsection

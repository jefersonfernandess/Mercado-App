<!-- Modal -->
<div class="modal fade" id="editmodal-{{ $produto->id }}" tabindex="-1"
    aria-labelledby="editmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editmodal">Editar produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('produtos.update', $produto->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ $produto->nome }}">
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="descricao"
                            name="descricao" placeholder="Descrição" value="{{ $produto->descricao }}">
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="text" class="form-control" id="preco" name="preco"
                            placeholder="Preço" value="{{ $produto->preco }}">
                    </div>
                    <div class="mb-3">
                        <label for="quantidade" class="form-label">Quantidade</label>
                        <input type="text" class="form-control" id="quantidade"
                            name="quantidade" placeholder="Quantidade" value="{{ $produto->quantidade }}">
                    </div>
                    <div class="mb-3">
                        <label for="codigo_de_barras" class="form-label">Código de
                            barras</label>
                        <input type="text" class="form-control" id="codigo_de_barras"
                            name="codigo_de_barras" placeholder="Codigo de barras (opcional)" value="{{ $produto->codigo_de_barras }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-success"
                            data-bs-dismiss="modal">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
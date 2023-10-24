<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('produtos.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="descricao"
                            placeholder="Descrição">
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="text" class="form-control" id="preco"
                            placeholder="Preço">
                    </div>
                    <div class="mb-3">
                        <label for="quantidade" class="form-label">Quantidade</label>
                        <input type="text" class="form-control" id="quantidade"
                            placeholder="Quantidade">
                    </div>
                    <div class="mb-3">
                        <label for="codigo_de_barras" class="form-label">Código de barras</label>
                        <input type="text" class="form-control" id="codigo_de_barras"
                            placeholder="Codigo de barras (opcional)">
                    </div>                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" data-bs-dismiss="modal" class="btn btn-success">Enviar</button>
            </div>
        </div>
    </div>
</div>

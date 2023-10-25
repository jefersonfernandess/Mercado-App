<!-- Modal -->
<div class="modal fade" id="apagar-{{ $produto->id }}" tabindex="-1" aria-labelledby="destroymodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="destroymodal">Apagar o produto: <i>{{ $produto->nome }}</i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem certeza?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Fechar</button>
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>

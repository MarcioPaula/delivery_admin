<div class="modal fade" id="novo_frete" tabindex="-1" role="dialog" aria-labelledby="nova_freteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="nova_freteLabel">Novo Frete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('fretes.add')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="col-md-12" >
                        <div class="form-group">
                            <label for="frete">Nome</label>
                            <input type="text" name="nome" autocomplete="off" required placeholder="Nome" class="form-control"/>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="frete">Valor</label>
                            <input type="text" name="valor" autocomplete="off" required placeholder="Valor" class="form-control money2"  />
                        </div>
                    </div>

                    <div class="col-md-12" >
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" id="defaultCheck1" name="status" checked>
                            <label class="form-check-label" for="defaultCheck1" _msthash="1496846" _msttexthash="550082"> Status do Frete </label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
    </div>
</div>

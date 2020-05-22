    <!-- Modal -->
    <div class="modal fade" id="dialog_add_form" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nuevo Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form class="modal-body" method="POST" id="add_product_form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" name="product_name" value="" class="form-control">
                        <span class="text-danger" id="pnam_error"></span>
                    </div>
                    <div class="form-group">
                        <label>Marca:</label>
                        <select class="form-control" name="id_branch">
                            <option value="0">Selecciona una marca</option>
                            @foreach($branches as $b)
                            <option value="{{ $b->id_branch }}">{{ $b->name_branch }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger" id="idbr_error"></span>
                    </div>
                    <div class="form-group">
                        <label>Categoría:</label>
                        <select class="form-control" name="id_category">
                            <option value="0">Selecciona una categoría</option>
                            @foreach($categories as $c)
                            <option value="{{ $c->id_category }}">{{ $c->name_category }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger" id="idcat_error"></span>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <label>Precio Público:</label>
                            <input type="number" name="product_price_public" step="1.00" class="form-control">
                            <span class="text-danger" id="prepu_error"></span>
                        </div>
                        <div class="col-6">
                            <label>Precio Proveedor:</label>
                            <input type="number" name="product_price_provider" class="form-control">
                            <span class="text-danger" id="prepro_error"></span>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="products.add_send(); return false">Añadir</button>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frminsertu" onsubmit="return actualizarDatosProducto()" method="POST">
                    <input type="text" id="id" name="id" hidden="">
                    <label>Nombre</label>
                    <input type="text" id="nombreu" name="nombreu" class="form-control form-control-sm" required="">
                    <label>Descripcion</label>
                    <input type="text" id="descripcionu" name="descripcionu" class="form-control form-control-sm" required="">
                    <label>Precio</label>
                    <input type="text" id="preciou" name="preciou" class="form-control form-control-sm">
                    <label>Nombre Imagen del Producto  ej:<br> (Brownie-chocolate-bravo.jpg)</label>
                    <input type="text" name="imagenu" id="imagenu" class="form-control" required>
                    <label>Stock</label>
                    <input type="number" id="stocku" name="stocku" class="form-control form-control-sm">
                    <br>
                    <input type="submit" value="Actualizar" class="btn btn-warning">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>
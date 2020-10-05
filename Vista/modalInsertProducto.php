
<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsert" onsubmit="return insertarDatosProductos()" method="POST" enctype="multipart/form-data">
              <label>Nombre</label>
              <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
              <label>Descripcion</label>
              <input type="text" id="descripcion" name="descripcion" class="form-control form-control-sm" required="">
              <label>Precio</label>
              <input type="text" id="precio" name="precio" class="form-control form-control-sm">
              <label>Nombre Imagen del Producto  ej:<br> (Brownie-chocolate-bravo.jpg)</label>
              <input type="text" name="imagen"  id="imagen" class="form-control" required>
              <label>Stock</label>
              <input type="number" id="stock" name="stock" class="form-control form-control-sm">
              <br>
               <input type="submit" value="Guardar" class="btn btn-primary">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>



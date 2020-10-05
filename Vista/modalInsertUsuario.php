
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
          <form id="frmUsuario" onsubmit="return insertarDatos()" method="POST">
              <label>Nombre</label>
              <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required="">
              <label>Apellido</label>
              <input type="text" id="apellido" name="apellido" class="form-control form-control-sm" required="">
              <label>Correo</label>
              <input type="text" id="correo" name="correo" class="form-control form-control-sm" required="">
              <label>Usuario</label>
              <input type="text" id="user" name="user" class="form-control form-control-sm" required="">
              <label>Password</label>
              <input type="password" id="pass1" name="pass1" class="form-control form-control-sm" required="">
              <label>Confirmar Password</label>
              <input type="password" id="pass2" name="pass2" class="form-control form-control-sm" required="">
              <label>Tipo de usuario</label>
              <select class="form-control" id="tipo" name="tipo">
                <option>admin</option>
                <option>cliente</option>
              </select>
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



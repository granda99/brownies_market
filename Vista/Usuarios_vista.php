<div class="col-sm-12">
    <div class="card text-left">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><strong>Registro Usuarios</strong></a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <span class="btn btn-dark" data-toggle="modal" data-target="#insertarModal">
                        <i class="fas fa-plus-circle"></i><strong>Nuevo Usuario </strong>
                    </span>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <div id="tablaDatos">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once "modalInsertUsuario.php"?>
<?php require_once "modalUpdateUsuario.php"?>

<script src="Modelo/AccionesUsuarios.js"></script>
<script src="vendor/jquery/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/bootstrap/js/sweetalert.min.js"></script>

<script type="text/javascript">
mostrar();
</script>
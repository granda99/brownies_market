<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Alibrerias/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="Alibrerias/estilo.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-sm-12" style="background: rgba(255, 255, 255, 0.432);">
                <div class="card text-left" style="background: rgba(255, 255, 255, 0.432);">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" style="background: rgba(255, 255, 255, 0.432);">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Registro Productos</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">
                                    <i class="fas fa-plus-circle"></i> Nuevo registro
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
        </div>
    </div>



    <?php require_once "modalInsertProducto.php"?>
    <?php require_once "modalUpdateProducto.php"?>

	<script src="Modelo/AccionesProductos.js"></script>
    <script src="vendor/jquery/jquery-3.4.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/sweetalert.min.js"></script> 

    <script type="text/javascript">
    mostrarProductos();
    </script>

</body>

</html>
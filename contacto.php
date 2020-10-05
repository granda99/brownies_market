<?php
session_start();
if(!isset($_SESSION['usuario'])){
    //header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Brownie Jijijapa &mdash; Contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">

</head>

<body>

    <div class="site-wrap">
        <?php include ("base/header.php");
        include ("base/header_movil.php");
  ?>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3><br>Ponte de contacto con nosotros</br><br></h3>

                    </div>
                    <div class="col-md-7">

                        <form id="frmMensaje" onsubmit="return insertMensajes()" method="POST">

                            <div class="p-3 p-lg-5 border">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="nombre" class="text-black">Nombre <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="correo" class="text-black">Correo electrónico <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="correo" name="correo"
                                            placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="mensaje" class="text-black">Mensaje </label>
                                        <textarea name="mensaje" id="mensaje" cols="30" rows="7"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="submit" class="ps-btn btn-primary btn-lg btn-block" value="Enviar">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 ml-auto">
                        <div class="p-4 border mb-3">
                            <h3>Guayaquil</h3>
                            <p class="mb-10">Avenida Adriana, 79, 8º, Guayaquil, Guayas, Ecuador</p>
                        </div>
                        <div class="p-4 border mb-3">
                            <h3>Manabi</h3>
                            <p class="mb-10">Pasaje Roberto, 338, 1º A, Jipijapa, Manabi, Ecuador</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php include("base/footer.php"); ?>
    </div>

    <script src="Modelo/AccionesUsuarios.js"></script>
    <script src="vendor/jquery/jquery-3.4.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/sweetalert.min.js"></script>
</body>

</html>
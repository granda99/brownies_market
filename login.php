<?php
session_start();
if(isset($_SESSION['usuario'])){
    header("location: catalogo.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <m eta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Brownies Jipijapa</title>
        <link rel="shorcut icon" type="image/x-icon" href="../img/cabezera-browniesBJ.jpg">
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">



</head>

<body>
    <?php include ("base/header.php");
        include ("base/header_movil.php");
  ?>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-around">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->

                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido de nuevo!</h1>
                                    </div>

                                    <div class="ps-form--account ps-tab-root">

                                        <ul class="ps-tab-list">
                                            <li class="active"><a href="#sign-in">Ingresar</a></li>
                                            <li class=""><a href="#register">Registrar</a></li>
                                        </ul>
                                        <div class="ps-tabs">
                                            <div class="ps-tab active" id="sign-in">
                                                <div class="ps-form__content">
                                                    <h4>Ingresa a tu cuenta</h4><br>
                                                    <form class="user" id="logUsuario" onsubmit=" return logerUsuario()"
                                                        method="POST">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" id="user"
                                                                name="user" aria-describedby="emailHelp"
                                                                placeholder="Correo electrónico o usuario">
                                                        </div>
                                                        <div class="form-group form-forgot">
                                                            <input class="form-control" type="password" id="pass"
                                                                name="pass" autocomplete="contraseña"
                                                                placeholder="Contraseña" required="">
                                                        </div>
                                                        <div class="form-group submtit">
                                                            <button type="submit"
                                                                class="ps-btn ps-btn--fullwidth">Registrar</button>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="ps-form__footer">
                                                </div>
                                            </div>
                                            <div class="ps-tab" id="register">
                                                <div class="ps-form__content">
                                                    <h4>Crear una cuenta</h4><br>
                                                    <form class="user" id="frmUsuario" onsubmit="return insertarDatos()"
                                                        method="POST">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="nombre"
                                                                id="nombre" placeholder="Nombre" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="apellido"
                                                                id="apellido" placeholder="Apellido" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="user"
                                                                id="user" placeholder="Usuario " required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="correo"
                                                                id="correo" placeholder="Correo Electrónico "
                                                                required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="password" name="pass1"
                                                                id="pass1" placeholder="Contraseña">
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="password" name="pass2"
                                                                id="pass2" placeholder="Confirmar Password">
                                                        </div>
                                                        <div class="form-group submtit">
                                                            <button type="submit"
                                                                class="ps-btn ps-btn--fullwidth">Registrar</button>
                                                        </div>
                                                    </form>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- End Register Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <?php include("base/footer.php");?>
</body>

</html>
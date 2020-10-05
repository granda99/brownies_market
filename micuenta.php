<?php
session_start();
if(!isset($_SESSION['usuario'])){
   // header("location: login.php");
}
?>


<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Brownie Jipijapa | Mi cuenta</title>


</head>

<body>
    <?php include ("base/header.php");
        include ("base/header_movil.php");
  ?>

    <!--=====================================
	Header Mobile
	======================================-->


    <header class="header header--mobile" data-sticky="true">

        <div class="navigation--mobile">

            <div class="navigation__left">

                <!--=====================================
				Menu Mobile
				======================================-->

                <div class="menu--product-categories">

                    <div class="ps-shop__filter-mb mt-4" id="filter-sidebar">
                        <i class="icon-menu "></i>
                    </div>

                    <div class="ps-filter--sidebar">

                        <div class="ps-filter__header">
                            <h3>Menú</h3><a class="ps-btn--close ps-btn--no-boder" href="#"></a>
                        </div>

                        <div class="ps-filter__content">

                            <aside class="widget widget_shop">
                                <ul class="ps-list--categories">
                                    <li class="current-menu-item "><a href="index.php">Inicio</a>
                                    </li>
                                    <li class="current-menu-item "><a href="catalogo.php">Catálogo</a>
                                    </li>
                                    <li class="current-menu-item "><a href="sobre_nosotros.php">Sobre Nosotros</a>
                                    <li class="current-menu-item "><a href="contacto.php">Contacto</a>

                                        <?php if(isset($_SESSION['usuario']) ){?>
                                    <li class="current-menu-item "><a href="index_admin.php">Negocios</a>
                                        <?php if ($_SESSION['tipo']=="admin") {?>
                                    <li onClick=closeSession() class="current-menu-item "><a href="contacto.php">Cerrar
                                            cesión</a>
                                        <?php } }?>

                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div><!-- End menu-->
            </div>
            <div class="navigation__center">

                <a class="ps-logo" href="index.html">
                    <img src="img/template/logo.png" class="pt-3" alt="">
                </a>
            </div>
            <div class="navigation__right">

                <div class="header__actions">
                    <!--=====================================
					Login and Register
					======================================-->
                    <div class="ps-block--user-header">
                        <div class="ps-block__left">
                            <i class="icon-user"></i>
                        </div>
                        <div class="ps-block__right">
                            <?php if(!isset($_SESSION['usuario'])){?>
                            <a href="login.php">Ingresar sesión</a>
                            <?php } ?>
                            <?php if(isset($_SESSION['usuario'])){?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================
		Search
		======================================-->
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
    </header> <!-- End Header Mobile -->
    <!--=====================================
    My Account Content
    ======================================-->
    <div class="ps-vendor-dashboard pro">
        <div class="container">
            <div class="ps-section__header">
                <!--=====================================
                Profile
                ======================================-->
                <aside class="ps-block--store-banner">
                    <div class="ps-block__user">
                        <div class="ps-block__user-content text-center text-lg-left">
                            <h2 class="text-white"><?php echo $_SESSION['usuario'];?> </h2>
                            <p><i class="fas fa-user"></i> <?php echo $_SESSION['nombre'];?> </p>
                            <p><i class="fas fa-envelope"></i> <?php echo $_SESSION['correo'];?> </p>
                            <button class="btn btn-warning btn-lg">Change Password</button>
                        </div>
                        <div class="row ml-lg-auto pt-5">
                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <a href="carrito.php">
                                        <h1><i class="fas fa-shopping-cart text-white"></i></h1>
                                        <h5 class="text-white">Carrito</h5>
                                    </a>
                                </div>
                            </div><!-- box /-->
                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <a href="catalogo.php">
                                        <h1><i class="fas fa-shopping-bag text-white"></i></h1>
                                        <h5 class="text-white">Productos</h5>
                                    </a>
                                </div>
                            </div><!-- box /-->
                            <div class="col-lg-3 col-6">
                                <div class="text-center">
                                    <a href="contacto.php">
                                        <h1><i class="fas fa-comments text-white"></i></h1>
                                        <h5 class="text-white">Contacto</h5>
                                    </a>
                                </div>
                            </div><!-- box /-->
                        </div>
                    </div>
                </aside><!-- s -->
            </div>
        </div>
    </div>
    <?php include ("base/footer.php"); ?>
    <!--=====================================
	JS PERSONALIZADO
	======================================-->
    <script src="js/main.js"></script>
</body>

</html>
<header class="header header--standard header--market-place-4" data-sticky="true">
    <div class="header__content">
        <div class="container">
            <div class="header__content-left">
                <!--=====================================
					Logo
					======================================-->
                <a class="ps-logo" href="index.php">
                    <img src="img/template/logo.png" alt="">
                </a>
                <!--=====================================
					Menú
					======================================-->
                <div class="menu--product-categories">
                    <div class="menu__toggle">
                        <i class="icon-menu"></i>
                        <span> Menú</span>
                    </div>
                    <div class="menu__content">
                        <ul class="menu--dropdown">
                            <li>
                                <a href="index.php"><i class="icon-home2"></i> Inicio</a>
                            </li>
                            <li>
                                <a href="catalogo.php"><i class="icon-loyalty"></i> Catálogo</a>
                            </li>
                            <li>
                                <a href="sobre_nosotros.php"><i class="icon-person"></i> Sobre nosotros</a>
                            </li>
                            <li>
                                <a href="contacto.php"><i class="icon-comments"></i> Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- End menu-->
            </div><!-- End Header Content Left-->
            <!--=====================================
				Search
				======================================-->
            <div class="header__content-center">
                <form class="ps-form--quick-search" action="catalogo.php" method="get">
                    <input class="form-control" type="text" placeholder="Busca tu brownie favorito">
                    <button>Buscar</button>
                </form>
            </div>
            <div class="header__content-right">
                <div class="header__actions">
                    <!--=====================================
						Cart
						======================================-->
                    <div class="ps-cart--mini">
                        <a class="header__extra" href="carrito.php">
                            <i class="icon-shopping-cart"></i>
                        </a>
                    </div>
                    <!--=====================================
						Login and Register
						======================================-->
                    <div class="ps-block--user-header">
                        <div class="ps-block__left">
                            <div class="menu--product-categories">
                                <?php if(isset($_SESSION['usuario'])){?>
                                <div class="menu__toggle left">
                                    <i class="icon-user"></i>
                                    <span> Menú</span>
                                </div>
                                <div class="menu__content">
                                    <ul class="menu--dropdown ">
                                        <li>
                                            <a href="micuenta.php"><i class="icon-home2 "></i>Mi perfil</a>
										</li>
										<?php if($_SESSION['tipo']=="admin") {?>
                                        <li>
                                            <a href="index_admin.php"><i class="icon-list-alt"></i>Negocio</a>
										</li>
								<?php } ?>
                                        <li onClick=closeSession()>
                                            <a href="#"><i class="icon-close"></i> cerrar sesión</a>
                                        </li>
                                    </ul>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="ps-block__right">

                                <a href="login.php#sing-in">
                                    <?php
									if (isset($_SESSION["usuario"])) {
										echo $_SESSION['usuario'];  			
									}
									else{
										echo "Ingresar sesión" ; 
									}
									?></a>
                            </div><!-- End menu-->
                            <!--<a href="login.php#sing-in">Iniciar sesión o
                            	<a href="login.php#sing-in">Registrarse</a>-->
                        </div>
                    </div>
                </div><!-- End Header Actions-->
            </div><!-- End Header Content Right-->
        </div><!-- End Container-->
    </div><!-- End Header Content-->
</header>

<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style 2.css">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<!--=====================================
	CSS
	======================================-->
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
<!-- font awesome -->
<link rel="stylesheet" href="css/plugins/fontawesome.min.css">
<!-- Bootstrap 4 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- Owl Carousel -->
<link rel="stylesheet" href="css/plugins/owl.carousel.css">
<!-- Slick -->
<link rel="stylesheet" href="css/plugins/slick.css">
<!-- Light Gallery -->
<link rel="stylesheet" href="css/plugins/lightgallery.min.css">
<!-- Font Awesome Start -->
<link rel="stylesheet" href="css/plugins/fontawesome-stars.css">
<!-- jquery Ui -->
<link rel="stylesheet" href="css/plugins/jquery-ui.min.css">
<!-- Select 2 -->
<link rel="stylesheet" href="css/plugins/select2.min.css">
<!-- Scroll Up -->
<link rel="stylesheet" href="css/plugins/scrollUp.css">
<!-- estilo principal -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style 2.css">
<!-- Market Place 4 -->
<link rel="stylesheet" href="css/market-place-4.css">
<!--=====================================
	PLUGINS JS
	======================================-->
<!-- jQuery library -->
<script src="js/plugins/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script src="js/plugins/owl.carousel.min.js"></script>
<!-- Images Loaded -->
<script src="js/plugins/imagesloaded.pkgd.min.js"></script>
<!-- Masonry -->
<script src="js/plugins/masonry.pkgd.min.js"></script>
<!-- Isotope -->
<script src="js/plugins/isotope.pkgd.min.js"></script>
<!-- jQuery Match Height -->
<script src="js/plugins/jquery.matchHeight-min.js"></script>
<!-- Slick -->
<script src="js/plugins/slick.min.js"></script>
<!-- jQuery Barrating -->
<script src="js/plugins/jquery.barrating.min.js"></script>
<!-- Slick Animation -->
<script src="js/plugins/slick-animation.min.js"></script>
<!-- Light Gallery -->
<script src="js/plugins/lightgallery-all.min.js"></script>
<!-- jQuery UI -->
<script src="js/plugins/jquery-ui.min.js"></script>
<!-- Sticky Sidebar -->
<script src="js/plugins/sticky-sidebar.min.js"></script>
<!-- Slim Scroll -->
<script src="js/plugins/jquery.slimscroll.min.js"></script>
<!-- Select 2 -->
<script src="js/plugins/select2.full.min.js"></script>
<!-- Scroll Up -->
<script src="js/plugins/scrollUP.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Modelo/AccionesUsuarios.js"></script>
<script src="vendor/jquery/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/bootstrap/js/sweetalert.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<script src="js/main.js"></script>
<script src="js/carrito/jquery-3.3.1.min.js"></script>
<script src="js/carrito/jquery-ui.js"></script>
<script src="js/carrito/popper.min.js"></script>
<script src="js/carrito/bootstrap.min.js"></script>
<script src="js/carrito/owl.carousel.min.js"></script>
<script src="js/carrito/jquery.magnific-popup.min.js"></script>
<script src="js/carrito/aos.js"></script>
<script src="js/carrito/main.js"></script>
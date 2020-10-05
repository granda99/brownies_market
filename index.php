<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Brownie Jipijapa | &mdash; Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  </head>
  <body>
  
  <div class="site-wrap">
  <?php include ("base/header.php");
        include ("base/header_movil.php");
  ?> 
	<div class="site-blocks-cover" style="background-image: url(img/presentacion/brownie_principal-01.jpg);" data-aos="fade">
		  <div class="container">
			<div class="row align-items-start align-items-md-center justify-content-end">
			  <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
				<h1 class="mb-2">Encuentra tu sabor favorito</h1>
				<div class="intro-text text-center text-md-left">
				  <p class="mb-4">Brownies de chocolate caseros.
					  Una amplia selección de deliciosos brownies caseros disponibles a excelentes precios. Ideal para fiestas, bodas o regalos. </p>
				  <p>
					<a href="catalogo.php" class="ps-btn btn btn-lg btn-block">Comprar ahora</a>
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		</div>

     <div class="ps-site-features">

            <div class="container">

                <div class="ps-block--site-features ps-block--site-features-2">

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-rocket"></i></div>
                        <div class="ps-block__right">
                            <h4>Envio Gratis</h4>
                            <p>Todo compra apatir de $ 30</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-sync"></i></div>
                        <div class="ps-block__right">
                            <h4>24 horas de retorno</h4>
                            <p>Si tienes algún problema</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                        <div class="ps-block__right">
                            <h4>Pago seguro</h4>
                            <p>Pago 100% seguro</p>
                        </div>
                    </div>

                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>Soporte 24/7</h4>
                            <p>Soporte dedicado</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
	  
	<div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Productos destacados</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
				<div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="img/productos/MINI BROWNIES_X_24.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="compra_producto.php?id_producto=5">MINI BROWNIES X 24</a></h3>
                    <p class="mb-0">Caja de 24 mini brownies (3.5 x 3.5 cm cada uno).</p>
                    <p class="text-success font-weight-bold">$15.99</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="img/productos/brownie_terremoto.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="compra_producto.php?id_producto=1">BROWNIES TERREMOTO</a></h3>
                    <p class="mb-0">Brownies rellenos de manjar blanco, con base de galleta de vainilla (como la del pie de limón)</p>
                    <p class="text-success font-weight-bold">$3.99</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="img/productos/nutella_bondies.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="compra_producto.php?id_producto=2">NUTELLA BLONDIES</a></h3>
                    <p class="mb-0">Blondies rellenos de nutella y oreo.
Caja x 6</p>
                    <p class="text-success font-weight-bold">$4.99</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="img/productos/DOUBLE_CHOCOLATE_BROWNIES.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="compra_producto.php?id_producto=3">BROWNIES DE CHOCOLATE DOBLE</a></h3>
                    <p class="mb-0">A veces, un solo chocolate no es suficiente. Así que aquí hay un regalo: chocolate negro perversamente indulgente y chocolate con leche cremoso y suave.
Doblemente bueno.</p>
                    <p class="text-success font-weight-bold">1.99</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="img/productos/brownie_coco.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="compra_producto.php?id_producto=4">BROWNIES DE COCO</a></h3>
                    <p class="mb-0">Cierra los ojos y puedes escuchar el susurro de las palmeras.
Horneado a mano individualmente en nuestro Brownie Barn en Barden y entregado directamente en su puerta.</p>
                    <p class="text-success font-weight-bold">$2.49</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="row">
          <div class="col-md-12">
            <div class="site-section site-blocks-2">
                <div class="row justify-content-center text-center mb-5">
                  <div class="col-md-7 site-section-heading pt-4">
                    <h2>Categorias</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="img/categorias/brownie_clasico.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Collections</span>
                        <h3>Clasicos</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="img/categorias/brownie_relleno.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Brownies</span>
                        <h3>Rellenos</h3>
                      </div>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                      <figure class="image">
                        <img src="img/categorias/brownie_decorado.jpg" alt="" class="img-fluid">
                      </figure>
                      <div class="text">
                        <span class="text-uppercase">Brownies</span>
                        <h3>Decorados</h3>
                      </div>
                    </a>
                  </div>
                </div>
              
            </div>
          </div>
        </div>

    <?php include("base/footer.php"); ?> 
	  


  </div>

    
    
  </body>
</html>
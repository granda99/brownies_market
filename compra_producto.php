<?php
session_start();
if(!isset($_SESSION['usuario'])){
    //header("location: login.php");
}
?>

<?php
  include("modulo/conexion.php");
  if( isset($_GET['id_producto'])){
    $resultado = $conexion ->query("select * from producto where id_producto=".$_GET['id_producto'])or die($conexion->error);
    if(mysqli_num_rows($resultado) > 0 ){
      $fila = mysqli_fetch_row($resultado);
    }else{
     // header("Location: ./index.php");
    }
  }else{
    //redireccionar
    //header("Location: ./index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tienda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

    <div class="site-wrap">
        <?php include ("base/header.php");
        include ("base/header_movil.php");
  ?>
        <div class="site-section">
            <div class="container">
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/productos/<?php echo $fila[4]; ?>" alt="<?php echo $fila[1]; ?>"
                            class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-black"><?php echo $fila[1]; ?></h2>
                        <p><?php echo $fila[2]; ?></p>
                        <p><strong class="text-danger h3">$<?php echo $fila[3]; ?></strong></p>

                        <div class="mb-5">
                            <div class="input-group mb-3" style="max-width: 120px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-warning js-btn-minus" type="button">&minus;</button>
                                </div>
                                <input type="text" class="form-control text-center" value="1" placeholder=""
                                    aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-warning js-btn-plus" type="button">&plus;</button>
                                </div>
                            </div>
                        </div>
                        <p><a href="carrito.php?id_producto=<?php echo $fila[0]; ?>"
                                class="ps-btn ps-btn--fullwidth">Añadir al carrito</a></p>
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
                                        <img src="img/productos/brownie_terremoto.jpg" alt="Image placeholder"
                                            class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="compra_producto.php?id_producto=1">BROWNIES TERREMOTO</a></h3>
                                        <p class="mb-0">Brownies rellenos de manjar blanco, con base de galleta de
                                            vainilla (como la del pie de limón)</p>
                                        <p class="text-success font-weight-bold">$3.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="img/productos/DOUBLE_CHOCOLATE_BROWNIES.jpg" alt="Image placeholder"
                                            class="img-fluid">
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
                                        <img src="img/productos/DOUBLE_CHOCOLATE_BROWNIES.jpg" alt="Image placeholder"
                                            class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="compra_producto.php?id_producto=3">BROWNIES DE CHOCOLATE DOBLE</a>
                                        </h3>
                                        <p class="mb-0">A veces, un solo chocolate no es suficiente. Así que aquí hay un
                                            regalo: chocolate negro perversamente indulgente y chocolate con leche
                                            cremoso y suave.
                                            Doblemente bueno.</p>
                                        <p class="text-warning font-weight-bold">1.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="img/productos/brownie_coco.jpg" alt="Image placeholder"
                                            class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="compra_producto.php?id_producto=4">BROWNIES DE COCO</a></h3>
                                        <p class="mb-0">Cierra los ojos y puedes escuchar el susurro de las palmeras.
                                            Horneado a mano individualmente en nuestro Brownie Barn en Barden y
                                            entregado directamente en su puerta.</p>
                                        <p class="text-success font-weight-bold">$2.49</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="img/productos/MINI BROWNIES_X_24.jpg" alt="Image placeholder"
                                            class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="compra_producto.php?id_producto=5">MINI BROWNIES X 24</a></h3>
                                        <p class="mb-0">Caja de 24 mini brownies (3.5 x 3.5 cm cada uno).</p>
                                        <p class="text-success font-weight-bold">$15.99</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("base/footer.php"); ?>
    </div>



</body>

</html>
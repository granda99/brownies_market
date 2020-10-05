<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
    header("location: login.php");
}
if (!isset($_SESSION['carrito'])) {
    header('Location: ./index.php');
}
$arreglo  = $_SESSION['carrito'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Caja | &mdash; Brownie Jipijapa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="site-wrap">
        <?php include ("base/header.php");
        include ("base/header_movil.php");
        ?>
        <form id="frmPedido" onsubmit="return insertarPedido()" method="post">
            <div class="site-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12">

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 mb-5 mb-md-0">
                            <h2 class="h3 mb-3 text-black">Detalles de compra</h2>
                            <div class="p-3 p-lg-5 border">
                                <div class="form-group">
                                    <label for="c_city" class="text-black">Ciudad <span
                                            class="text-danger">*</span></label>
                                    <select id="c_city" class="form-control" name="c_city" required="">
                                        <option>Selecciona ciudad</option>
                                        <option>Jipijapa</option>
                                        <option>Guayaquil</option>
                                        <option>Manta</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_fname" class="text-black">Primer nombres <spanb
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_fname" name="c_fname"
                                            value="<?php echo $_SESSION['nombre'];?>" required="">
                                        <input type="text" class="form-control" id="id_factura" name="id_factura"
                                            hidden>
                                        <input type="text" class="form-control" id="id_usuario"
                                            value="<?php echo $_SESSION['id_usuario'] ?>" name="id_usuario" hidden>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_lname" class="text-black">Apellido <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_lname" name="c_lname"
                                            value="<?php echo $_SESSION['apellido'];?>" required="">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_address" class="text-black">Dirección<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="direccion" name="direccion"
                                            placeholder="Dirección de domicilio" required="">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_email_address" class="text-black">Correo electrónico <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="c_email_address"
                                            name="c_email_address" value="<?php echo $_SESSION['correo'];?>"
                                            required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_postal_zip" class="text-black">Codigo postal <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip"
                                            required="">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="c_order_notes" class="text-black">Notas de la orden</label>
                                    <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5"
                                        class="form-control" placeholder="Escribe tu nota aquí..."></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <h2 class="h3 mb-3 text-black">Código del cupón</h2>
                                    <div class="p-3 p-lg-5 border">

                                        <label for="c_code" class="text-black mb-3">Ingrese el cupón si tiene
                                            uno</label>
                                        <div class="input-group w-75">
                                            <input type="text" class="form-control" id="c_code"
                                                placeholder="Código del cupon" aria-label="Coupon Code"
                                                aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-sm" type="button"
                                                    id="button-addon2">Aplicar</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <h2 class="h3 mb-3 text-black">Su pedido es</h2>
                                    <div class="p-3 p-lg-5 border">
                                        <table class="table site-block-order-table mb-5">
                                            <thead>
                                                <th>Producto</th>
                                                <th>Cantidad</th>
                                                <th>Precio unidad</th>
                                            </thead>
                                            <tbody>
                                                <?php
                        $total = 0;
                        for ($i=0;$i<count($arreglo);$i++) {
                            $total =$total+ ($arreglo[$i]['precio']*$arreglo[$i]['cantidad']); ?>
                                                <tr>
                                                    <td><?php echo $arreglo[$i]['nombre']; ?> </td>
                                                    <td><?php echo $arreglo[$i]['cantidad']; ?> </td>
                                                    <td>$<?php echo  number_format($arreglo[$i]['precio'], 2, '.', ''); ?>
                                                    </td>
                                                </tr>

                                                <?php
                        }
                        ?>
                                                <tr>
                                                    <td>Orden total</td>
                                                    <td> </td>
                                                    <td>$<?php echo number_format($total, 2, '.', '');?></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="border p-3 mb-3">
                                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse"
                                                    href="#collapsebank" role="button" aria-expanded="false"
                                                    aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                                            <div class="collapse" id="collapsebank">
                                                <div class="py-2">
                                                    <p class="mb-0">PAGOS EN EFECTIVO MI ÑAÑOSH</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border p-3 mb-3">
                                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse"
                                                    href="#collapsecheque" role="button" aria-expanded="false"
                                                    aria-controls="collapsecheque">Cheque Payment</a></h3>

                                            <div class="collapse" id="collapsecheque">
                                                <div class="py-2">
                                                    <p class="mb-0">PAGOS EN EFECTIVO MI ÑAÑOSH</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border p-3 mb-5">
                                            <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse"
                                                    href="#collapsepaypal" role="button" aria-expanded="false"
                                                    aria-controls="collapsepaypal">Paypal</a></h3>

                                            <div class="collapse" id="collapsepaypal">
                                                <div class="py-2">
                                                    <p class="mb-0">PAGOS EN EFECTIVO MI ÑAÑOSH</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Procesar
                                                Orden</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </form>
        <?php include("base/footer.php"); ?>
    </div>

    <script src="Modelo/AccionesUsuarios.js"></script>
    <script src="vendor/jquery/jquery-3.4.1.min.js"></script>

    <script src="vendor/bootstrap/js/sweetalert.min.js"></script>

</body>

</html>
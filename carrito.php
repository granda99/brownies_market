<?php 
  session_start();

if(!isset($_SESSION['usuario'])){
    //header("location: login.php");
}

  //unset($_SESSION['carrito']);
  include 'modulo/conexion.php';
  if(isset($_SESSION['carrito'])){
    //si existe buscamos si ya estaba agregado ese producto
    if(isset($_GET['id_producto'])){
      $arreglo =$_SESSION['carrito'];
      $encontro=false;
      $numero = 0;
      for($i=0;$i<count($arreglo);$i++){
        if($arreglo[$i]['id_producto'] == $_GET['id_producto']){
          $encontro=true;
          $numero=$i;
        }
      }
      if($encontro == true){
        $arreglo[$numero]['cantidad']=$arreglo[$numero]['cantidad']+1;
        $_SESSION['carrito']=$arreglo;
      }else{
        /// no estaba el registro
        $nombre ="";
        $precio= "";
        $imagen="";
        $res= $conexion->query('select * from producto where id_producto='.$_GET['id_producto'])or die($conexion->error);
        $fila = mysqli_fetch_row($res);
        
        $nombre=$fila[1];
        $precio = $fila[3];
        $imagen = $fila[4];
        $arregloNuevo= array(
                    'id_producto'=> $_GET['id_producto'],
                    'nombre'=> $nombre,
                    'precio'=>$precio,
                    'imagen'=> $imagen,
                    'cantidad' => 1
        );
        array_push($arreglo, $arregloNuevo);
        $_SESSION['carrito']=$arreglo;
      }
    }
  }else{
    //creamos la variable de sesion
    if(isset($_GET['id_producto'])){
      $nombre ="";
      $precio= "";
      $imagen="";
      $res= $conexion->query('select * from producto where id_producto='.$_GET['id_producto'])or die($conexion->error);
      $fila = mysqli_fetch_row($res);
      
      $nombre=$fila[1];
      $precio = $fila[3];
      $imagen = $fila[4];
      $arreglo[] = array(
                  'id_producto'=> $_GET['id_producto'],
                  'nombre'=> $nombre,
                  'precio'=>$precio,
                  'imagen'=> $imagen,
                  'cantidad' => 1
      );
      $_SESSION['carrito']=$arreglo;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Brownie Jijijapa </title>
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

    <div class="site-section ">
      <div class="container">
		  <br>
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
				<div class="table-responsive">
              <table class="table table-bordered table-striped ">
                <thead class ="thead-dark">
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove ">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                <?php  
                  $total = 0;
                  if(isset($_SESSION['carrito'])){ 
                    $arregloCarrito =$_SESSION['carrito'];
                    for($i=0;$i<count($arregloCarrito);$i++){
                      $total= $total + ( $arregloCarrito[$i]['precio'] * $arregloCarrito[$i]['cantidad'] );
                ?>
                  <tr>
                    <td class="product-thumbnail ">
                      <img src="img/productos/<?php echo $arregloCarrito[$i]['imagen']; ?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['nombre']; ?></h2>
                    </td>
                    <td>$<?php echo $arregloCarrito[$i]['precio']; ?></td>
                    <td>
                        <h2 class="h5 text-black">   <?php echo $arregloCarrito[$i]['cantidad']; ?>
                    </td>
                    <td  class="cant<?php echo $arregloCarrito[$i]['id_producto']; ?>">
                      $<?php echo $arregloCarrito[$i]['precio'] * $arregloCarrito[$i]['cantidad']; ?></td>
                    <td ><a  style="color:#FF0000" class=" border border-danger ps-btn ps-btn--fullwidth btn-sm btnEliminar" data-id="<?php echo $arregloCarrito[$i]['id_producto'];?>">X</a></td>
                  </tr>
                  
                  <?php } } ?>
                 
                </tbody>
              </table>
					</div>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              
              <div class="col-md-6">
                <button onclick="location.href='catalogo.php'" class="ps-btn ps-btn--fullwidth py-sm-3">Continuar comprando</button>
              </div>
            </div>
           
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Carrito total</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?php echo $total - $total*0.12;?></strong>
                  </div>
					<div class="col-md-6 text-left">
					<br>
                    <strong class="text-right"> + IVA</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?php echo $total;?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class=" ps-btn ps-btn--fullwidth py-sm-3" onclick="window.location='caja.php'">Procesar compra</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
                <br
					<br>
	  
    <?php include("base/footer.php"); ?> 
  </div>

  <script>
    $(document).ready(function(){
      $(".btnEliminar").click(function(event){
        event.preventDefault();
        var id_carrito = $(this).data('id_carrito');
        var boton = $(this);
        $.ajax({
          method:'POST',
          url:'./modulo/eliminarcarrito.php',
          data:{
            id_carrito:id_carrito
          }
        }).done(function(respuesta){
         boton.parent('td').parent('tr').remove();
        });
      });
      $(".txtCantidad").keyup(function(){
        var cantidad = $(this).val();
        var precio = $(this).data('precio');
        var id_carrito =  $(this).data('id_carrito');
        incrementar(cantidad,precio,id_carrito);
       
      });
      $(".btnIncrementar").click(function(){
        var precio = $(this).parent('div').parent('div').find('input').data('precio');
        var id_carrito = $(this).parent('div').parent('div').find('input').data('id_carrito');
        var cantidad = $(this).parent('div').parent('div').find('input').val();
        incrementar(cantidad,precio,id_carrito);
      });
      function incrementar(cantidad, precio, id_carrito){
        var mult = parseFloat(cantidad)* parseFloat(precio);
        $(".cant"+id_carrito).text("$"+mult);
        $.ajax({
          method:'POST',
          url:'modulo/actualizarcarrito.php',
          data:{
            id_carrito:id_carrito,
            cantidad:cantidad
          }
        }).done(function(respuesta){
        
        });
      }
    });
  </script>
    
  </body>
</html>
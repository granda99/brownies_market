<?php
session_start();
if(!isset($_SESSION['usuario'])){
    //header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Catálofo | Brownie Jipijapa</title>
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
        <div class="row mb-5">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-center mb-4"><h2 class="text-black h2">Catálogo</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-secondary " id_producto="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Últimos
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Chocolate</a>
                      <a class="dropdown-item" href="#">Vainilla</a>
                      <a class="dropdown-item" href="#">Frutilla</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id_producto="dropdownMenuReference" data-toggle="dropdown">Orden</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Precio, bajo a alto</a>
                      <a class="dropdown-item" href="#">Precio, alto a bajo</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-05">
              <?php 
                include('modulo/conexion.php');
               /* for($i=0;$i<50;$i++){
                  $conexion->query("insert into productos (nombre, descripcion,precio,imagen, 
                                    inventario, id_categoria,talla,color) values (
                                      'Producto $i','Esta es la descripcion',".rand(10,1000).",'cloth_1.jpg',".rand(1,100).",1,'XL','Blue'
                                    ) ")or die($conexion->error);
                }*/
                $limite = 10;//productos por pagina
                $totalQuery = $conexion->query('select count(*) from producto')or die($conexion->error);
                $totalProductos = mysqli_fetch_row($totalQuery);
                $totalBotones = round($totalProductos[0] /$limite);
                if(isset($_GET['limite'])){
                  $resultado = $conexion ->query("select * from producto  where stock > 0  order by id_producto DESC limit ".$_GET['limite'].",".$limite)or die($conexion -> error);
                }else{
                  $resultado = $conexion ->query("select * from producto  where stock > 0  order by id_producto DESC limit ".$limite)or die($conexion -> error);
                }
                
                while($fila = mysqli_fetch_array($resultado)){
              ?>
                  <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                      <figure class="block-4-image">
                        <a href="compra_producto.php?id_producto=<?php echo $fila['id_producto'];?>">
                        <img src="img/productos/<?php echo $fila['imagen'];?>" alt="<?php echo $fila['nombre'];?>" class="img-fluid"></a>
                      </figure>
                      <div class="block-4-text p-4">
                        <h3><a href="compra_producto.php?id_pruducto=<?php echo $fila['id_producto'];?>"><?php echo $fila['nombre'];?></a></h3>
                        <p class="mb-0"><?php echo $fila['descripcion'];?></p>
                        <p class="text-success font-weight-bold">$<?php echo $fila['precio'];?></p>
                      </div>
                     
                    </div>
                  </div>
                <?php } ?>


            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 justify-content-md-center  text-center">
                <div class="site-block-27">
                  <ul>
                   
                      <?php 
                        if(isset($_GET['limite'])){
                          if($_GET['limite']>0){
                            echo ' <li><a href="catalogo.php?limite='.($_GET['limite']-10).'">&lt;</a></li>';
                          }
                        }

                        for($k=0;$k<$totalBotones;$k++){
                          echo  '<li><a href="catalogo.php?limite='.($k*10).'">'.($k+1).'</a></li>';
                        }
                        if(isset($_GET['limite'])){
                          if($_GET['limite']+10 < $totalBotones*10){
                            echo ' <li><a href="catalogo.php?limite='.($_GET['limite']+10).'">&gt;</a></li>';
                          }
                        }else{
                          echo ' <li><a href="catalogo.php?limite=10">&gt;</a></li>';
                        }
                      ?>
                  
  
                   </ul>
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
                        <span class="text-uppercase">Brownies</span>
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
        
      </div>
    </div>
    <?php include("base/footer.php"); ?> 

    
  </div>
    
  </body>
</html>
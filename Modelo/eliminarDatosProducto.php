<?php 

require_once "../Modelo/Producto_modelo.php";
$producto= new Producto_modelo();

$id = $_POST['id'];

echo  $producto->eliminarDatos($id);

?>
<?php 
require_once "../Modelo/Producto_modelo.php";
$producto= new Producto_modelo();

$datos = array(
    'id_producto' => $_POST['id'],
    'nombre' => $_POST['nombreu'],
    'descripcion' => $_POST['descripcionu'],
    'precio' => $_POST['preciou'],
    'imagen' => $_POST['imagenu'],
    'stock'=>$_POST['stocku']
);

echo $producto->actualizarDatos($datos);
?>
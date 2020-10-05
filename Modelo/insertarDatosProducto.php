<?php 
require_once "../Modelo/Producto_modelo.php";
$producto= new Producto_modelo();

$datos = array(
    'nombre' => $_POST['nombre'],
    'descripcion' => $_POST['descripcion'],
    'precio' => $_POST['precio'],
    'imagen' => $_POST['imagen'],
    'stock'=>$_POST['stock']
);

echo $producto->insertarDatos($datos);
?>
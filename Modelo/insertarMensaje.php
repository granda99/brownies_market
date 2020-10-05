<?php 

require_once "../Modelo/BaseDatos.php";

$db = BaseDatos::conexion();

$sql="INSERT INTO `mensaje`(`nombre_usuario`, `correo_usuario`, `descripcion`) 
    VALUES ('".$_POST['nombre']."','".$_POST['correo']."','".$_POST['mensaje']."')";

$query=$db->prepare($sql);

echo $query->execute();
?>
<?php 

require_once "../Modelo/BaseDatos.php";

$db = BaseDatos::conexion();

$sql="UPDATE `mensaje` SET `estado`= 'L' WHERE `id_mensaje`='".$_POST['id']."'";

$query=$db->prepare($sql);

echo $query->execute();
?>
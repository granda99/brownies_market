<?php 

require_once  "../Modelo/Usuario_modelo.php";
$usuario= new Usuario_Modelo();

$usuario->guardarDato($_POST['id'],"I");

echo $usuario->EliminarUsuario();


?>
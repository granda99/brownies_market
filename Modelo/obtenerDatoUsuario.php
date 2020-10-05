<?php 

require_once  "../Modelo/Usuario_modelo.php";
$usuario= new Usuario_Modelo();

$usuario->guardarDatos($_POST['id'],"","","","","","");

echo json_encode($usuario->getUsuario());

?>
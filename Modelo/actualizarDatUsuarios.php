<?php 
require_once  "../Modelo/Usuario_modelo.php";
$usuario= new Usuario_Modelo();

$usuario->guardarDatos($_POST['id'],$_POST['nombreu'],$_POST['apellidou'],$_POST['correou'],$_POST['usuariou'],"",$_POST['tipou']);


echo $usuario->UpdatetUsuario();
?>
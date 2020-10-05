<?php
require_once  "../Modelo/Usuario_modelo.php";
$usuario= new Usuario_Modelo();
$usuario->guardarDatos("",$_POST['nombre'], $_POST['apellido'], $_POST['correo'],  $_POST['user'], $_POST['pass1'],"");

echo $usuario->InsertUsuario();
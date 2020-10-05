<?php
session_start();
   
require_once "../Modelo/Usuario_modelo.php";
$usuario= new Usuario_Modelo();
$usuario->guardarDatos("","", "", "", $_POST['user'], $_POST['pass'],"");

$login=$usuario->getUsuario();

if ($login['usuario']!=null) {
    if ((($usuario->getUser()==$login['usuario'] || $usuario->getEmail()==$login['correo']) && $usuario->getPass()==$login['password'])) {
        $_SESSION['id_usuario']=$login['id_usuario'];
        $_SESSION['nombre']=$login['nombre'];
        $_SESSION['apellido']=$login['apellido'];
        $_SESSION['correo']=$login['correo'];
        $_SESSION['usuario']=$login['usuario'];
        $_SESSION['password']=$login['password'];
        $_SESSION['fecharegistro']=$login['fecharegistro'];
        $_SESSION['tipo']=$login['tipo'];

        if ($login['tipo']=="cliente") {
            $login['page']='catalogo.php';
            echo $login['page'];
        } else if($login['tipo']=="admin"){
            $login['page']='index_admin.php';
            echo $login['page'];
        }
        else{
            echo 0;
        }
    } else {
        echo 0;
    }
} else {
    echo 0;
}

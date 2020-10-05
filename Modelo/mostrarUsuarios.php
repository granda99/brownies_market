<?php
require_once "Usuario_modelo.php";

$usuarios= new Usuario_Modelo();
$datos=$usuarios->getUsuarios();


$tabla=' <div class="table-responsive">
<table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr class=" font-weight-bold">                    
                    <td>Nombre</td>                    
                    <td>Apellido</td>
                    <td>Correo</td>
                    <td>Usuario</td>
                    <td>Tipo</td>
                    <td>Fecha Registro</td>
                    <td>Acciones</td>
                    
                </tr>
            </thead>
            <tbody>';
$datosTabla="";

foreach( $datos as $key=>$value){
    $datosTabla=$datosTabla.'<tr>
                                <td> '.$value['nombre'].'</td>
                                <td>'.$value['apellido'].'</td>
                                <td>'.$value['correo'].'</td>
                                <td>'.$value['usuario'].'</td>
                                <td>'.$value['tipo'].'</td>
                                <td>'.$value['fecharegistro'].'</td>
                                <td>
                                    <span class="btn btn-warning btn-sm" onclick="obtenerDatos('.$value['id_usuario'].')" data-toggle="modal" data-target="#actualizarModal">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </span>

                                    <span class="btn btn-danger btn-sm" onclick="eliminarDatosUsuario('.$value['id_usuario'].')">
                                        <li class="fas fa-trash-alt"></li>
                                        Eliminar
                                    </span>
                                </td>
                            </tr>';
}
echo $tabla.$datosTabla.'</tbody>
                </table></span></div>';

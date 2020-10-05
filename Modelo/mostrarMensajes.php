<?php

include "../Modelo/BaseDatos.php";
$db = BaseDatos::conexion();
$mensajes = array();


$sql = "SELECT * from `mensaje` WHERE `estado`='P'";
$result = $db->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $mensajes[] = $row;
}

$datos=$mensajes;

$tabla=' <div class="table-responsive">
<table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr class=" font-weight-bold">                    
                    <td>Nombre Usuario</td>                    
                    <td>Correo Usuario</td>
                    <td>Mensaje</td>
                    <td>Fecha</td>
                    <td>Estado</td>
                    <td>Acción</td>
                </tr>
            </thead>
            <tbody>';
$datosTabla="";

foreach( $datos as $key=>$value){
    $datosTabla=$datosTabla.'<tr>
                                <td>'.$value['nombre_usuario'].'</td>
                                <td>'.$value['correo_usuario'].'</td>
                                <td>'.$value['descripcion'].'</td>
                                <td>'.$value['fecharegistro'].'</td>
                                <td>'.$value['estado'].'</td>
                                <td>
                                    <span class="btn btn-danger btn-sm" onclick="eliminarDatosMensaje('.$value['id_mensaje'].')">
                                        <li class="fas fa-check-square"></li>
                                        Leido
                                    </span>
                                </td>
                            </tr>';
}
echo $tabla.$datosTabla.'</tbody>
                </table></span></div>';
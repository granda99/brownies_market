<?php
require_once "../Modelo/Producto_modelo.php";

$producto= new Producto_modelo();
$datos=$producto->getProductos();

$tabla='<div class="table-responsive"> <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr class="font-weight-bold">
                    <td>Imagen</td>
                    <td>Nombre</td>                    
                    <td>Descripción</td>
                    <td>Precio</td>
                    <td>Stock</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>';
$datosTabla="";

foreach( $datos as $key=>$value){
    $datosTabla=$datosTabla.'<tr>
                                <td> <img width="65px" height="46px" src="img/productos/'.$value['imagen'].'" ></td>
                                <td>'.$value['nombre'].'</td>
                                <td>'.$value['descripcion'].'</td>
                                <td> $'.$value['precio'].'</td>                                
                                <td>'.$value['stock'].'</td>
                                <td>
                                    <span class="btn btn-warning btn-sm" onclick="obtenerDatosProducto('.$value['id_producto'].')" data-toggle="modal" data-target="#actualizarModal">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </span>
                                    <span class="btn btn-danger btn-sm" onclick="eliminarDatosProducto('.$value['id_producto'].')">
                                        <li class="fas fa-trash-alt"></li>
                                        Eliminar
                                    </span>
                                </td>
                            </tr>';
}
echo $tabla.$datosTabla.'</tbody>
                </table> </div>';
?>
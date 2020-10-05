<?php
session_start();

$arreglo  = $_SESSION['carrito'];
require_once  "../Modelo/Detalle_modelo.php";

$detalle= new Detalle_Modelo();
$bandera=0;
$i=0;
for ($i;$i<count($arreglo);$i++) {
    $detalle->guardarDatos("", $_POST['id_factura'], $arreglo[$i]['id_producto'], $arreglo[$i]['cantidad'],$arreglo[$i]['precio'], "", "");
    $bandera+=$detalle->InsertDetalle();
}
if ($bandera==$i) {
    echo 1;
}
else{
    echo 0;
}

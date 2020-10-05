<?php

require_once  "../Modelo/Pedido_modelo.php";
$pedido= new Pedido_Modelo();
$pedido->guardarDatos("",$_POST['id_factura'],$_POST['c_order_notes'],$_POST['c_city'], $_POST['direccion']."Cod-Postal: ".$_POST['c_postal_zip'], "","");

echo $pedido->InsertPedido();

?>
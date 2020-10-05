<?php

require_once  "../Modelo/Factura_modelo.php";
$factura= new Factura_Modelo();
$factura->guardarDatos("",$_POST['id_usuario'],"", "", "","");

if( $factura->InsertFactura() !=0){
    echo $factura->getUltimaFactura();
}
else{
    echo 0;
}

?>
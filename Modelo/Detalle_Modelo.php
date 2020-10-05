<?php
class Detalle_Modelo
{
    private $id_detalle;
    private $id_factura;
    private $id_producto;
    private $cantidad;
    private $precio;
    private $fecha;
    private $estado;
   
    private $db;
    private $pedidos;

    public function __construct()
    {
        include "../Modelo/BaseDatos.php";
        $this->db = BaseDatos::conexion();
        $this->pedidos = array();
    }

    public function guardarDatos($idd,$idf, $idp, $cant ,$prec, $fec, $est)
    {
        $this->id_detalle=$idd;
        $this->id_factura=$idf;
        $this->id_producto=$idp;
        $this->cantidad=$cant;
        $this->precio=$prec;
        $this->fecha=$fec;
        $this->estado=$est;
    }

    public function getDetalles()
    {
        $sql = "SELECT * FROM `detalle`";
        $result = $this->db->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->pedidos[] = $row;
        }
        return $this->usuarios;
    }

    public function getDetallesFactura()
    {
        
        $sql = "SELECT * FROM `detalle` WHERE `id_factura`='$this->id_factura'";
        
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetch();
    }

    public  function InsertDetalle()
    {
        $sql = "INSERT INTO `detalle`(`id_factura`, `id_producto`, `cantidad`, `precio`)
            VALUES (' $this->id_factura','$this->id_producto','$this->cantidad',' $this->precio')";
           
        $query  = $this->db->prepare($sql);
        return $query->execute();
    }

    public  function UpdatetPedido()
    {
        $sql = "UPDATE `pedido` SET `provincia`=' $this->provincia',`direccion`='$this->direccion' 
        WHERE `id_detalle`='$this->id_detalle'";
           
        $query  = $this->db->prepare($sql);
        return $query->execute();

    }
}

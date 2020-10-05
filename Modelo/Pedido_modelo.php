<?php
class Pedido_Modelo
{
    private $id_pedido;
    private $id_factura;
    private $detalle;
    private $ciudad;
    private $direccion;
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

    public function guardarDatos($idp,$idf,$detalle, $ciud, $dir, $fec, $est)
    {
        $this->id_pedido=$idp;
        $this->id_factura=$idf;
        $this->detalle=$detalle;
        $this->ciudad=$ciud;
        $this->direccion=$dir;
        $this->fecha=$fec;
        $this->estado=$est;
      
    }

    public function getPedidos()
    {
        $sql = "SELECT * FROM `pedido`";
        $result = $this->db->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->pedidos[] = $row;
        }
        return $this->usuarios;
    }

    public function getPedido()
    {
        
        $sql = "SELECT * FROM `pedido` WHERE `id_pedido`='$this->id_pedido'";
        
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetch();
    }

    public function getPedidoId()
    {        
        $sql = "SELECT * FROM `pedido` WHERE `id_factura`='$this->id_factura'";
        
        $query = $this->db->prepare($sql);

        $row= $query->execute();
        return $row['id_factura'];
    }

    public  function InsertPedido()
    {
        $sql = "INSERT INTO `pedido`(`id_factura`, `detalleorden`, `ciudad`, `direccion`) 
            VALUES (' $this->id_factura','$this->detalle','$this->ciudad','$this->direccion')";
           
        $query  = $this->db->prepare($sql);
        return $query->execute();
    }

    public  function UpdatetPedido()
    {
        $sql = "UPDATE `pedido` SET `detalleorden`='$this->detalle' `ciudad`=' $this->ciudad',`direccion`='$this->direccion' 
        WHERE `id_detalle`='$this->id_detalle'";
           
        $query  = $this->db->prepare($sql);
        return $query->execute();

    }
}

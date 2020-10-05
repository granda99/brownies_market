<?php
class Factura_Modelo
{
    private $id_factura;
    private $id_usuario;
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

    public function guardarDatos($idf,$idu, $fec, $est)
    {
        $this->id_factura=$idf;
        $this->id_usuario=$idu;
        $this->fecha=$fec;
        $this->estado=$est;
      
    }

    public function getFacturas()
    {
        $sql = "SELECT * FROM `factura`";
        $result = $this->db->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->pedidos[] = $row;
        }
        return $this->usuarios;
    }

    public function getFactura()
    {
        $sql = "SELECT * FROM `factura` WHERE `id_factura`='$this->id_factura'";
        
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch();
    }

    public  function InsertFactura()
    {
        $sql = "INSERT INTO `factura`( `id_usuario`) VALUES (' $this->id_usuario')";
           
        $query  = $this->db->prepare($sql);
        return $query->execute();
    }

    public function getUltimaFactura()
    {
        $sql = "SELECT MAX(id_factura) AS id_factura  FROM `factura`";
        
        $query = $this->db->prepare($sql);
        $query->execute();
        $row=$query->fetch();
        return $row['id_factura'];
    }
}

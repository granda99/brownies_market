<?php

class Producto_modelo 
{
    private $db;
    private $productos;

    public function __construct()
    {
        include "BaseDatos.php";
        $this->db = BaseDatos::conexion();
        $this->productos = array();
    }
    public function getProductos()
    {
        $sql = "SELECT * FROM `producto`";
        $result = $this->db->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->productos[] = $row;
        }
        return $this->productos;
    }

    public function insertarDatos($datos)
    {
        $sql = "INSERT INTO `producto`(`nombre`, `descripcion`, `precio`, `imagen`, `stock`) 
                    VALUES (:nombre,:descripcion,:precio,:imagen,:stock)";

        $query = $this->db->prepare($sql);
        $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $query->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $query->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
        $query->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
        $query->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);

        return $query->execute();

    }

    public function obtenerDatos($id)
    {
        $sql = "SELECT * FROM `producto` WHERE `id_producto`=:id";
        $query = $this->db->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch();
    }

    public function actualizarDatos($datos)
    {

        $sql = "UPDATE `producto` SET `nombre`=:nombre,`descripcion`=:descripcion,`precio`=:precio,`imagen`=:imagen,`stock`=:stock
                     WHERE `id_producto`=:id";

        $query = $this->db->prepare($sql);
        $query->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $query->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $query->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
        $query->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
        $query->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
        $query->bindParam(":id", $datos['id_producto'], PDO::PARAM_INT);

        return $query->execute();

    }

    public function eliminarDatos($id)
    {
        $sql = "UPDATE `producto` SET `estado`='I' WHERE `id_producto`=:id";
        $query = $this->db->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);

        return $query->execute();

    }
}

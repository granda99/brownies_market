<?php
class Usuario_Modelo
{
    private $id_usuario;
    private $nombre;
    private $apellido;
    private $correo;
    private $user;
    private $pass;
    private $tipo;
    private $estado;

    private $db;
    private $usuarios;

    public function __construct()
    {
        include "../Modelo/BaseDatos.php";
        $this->db = BaseDatos::conexion();
        $this->productos = array();
    }

    public function getUser(){
        return $this->user;
    }

    public function getPass(){
        return$this->pass;
    }
    public function getEmail(){
        return$this->correo;
    }
    public function guardarDatos($id,$nom, $ape, $cor, $us, $ps,$tip)
    {
        $this->id_usuario=$id;
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->correo=$cor;
        $this->user=$us;
        $this->pass=$ps;
        $this->tipo=$tip;
    }
    public function guardarDato($id,$esta)
    {
       
        $this->id_usuario=$id;
        $this->estado=$esta;
    }

    public function getUsuarios()
    {
        $sql = "SELECT * from `usuario` WHERE `estado` ='A'";
        $result = $this->db->query($sql);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->usuarios[] = $row;
        }
        return $this->usuarios;
    }

    public function getUsuario()
    {
        
        $sql = "SELECT * FROM `usuario` WHERE `usuario` ='$this->user' OR `correo`='$this->user'";
        if($this->id_usuario!=0){
            $sql=" SELECT * FROM `usuario` WHERE `id_usuario` ='$this->id_usuario'";
        }
        
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetch();
    }

    public  function InsertUsuario()
    {
        $sql = "INSERT INTO `usuario`(`nombre`, `apellido`, `correo`, `usuario`, `password`) 
            VALUES (' $this->nombre','$this->apellido','$this->correo',' $this->user',' $this->pass')";
           
        $query  = $this->db->prepare($sql);
        return $query->execute();
    }

    public  function UpdatetUsuario()
    {
        $sql = "UPDATE `usuario` SET `nombre`=' $this->nombre',`apellido`='$this->apellido',`correo`='$this->correo',`usuario`='$this->user',`tipo`='$this->tipo' 
        WHERE `id_usuario`='$this->id_usuario'";
           
        $query  = $this->db->prepare($sql);
        return $query->execute();

    }
    public  function EliminarUsuario()
    {
        $sql = "UPDATE `usuario` SET `estado`='$this->estado' 
        WHERE `id_usuario`='$this->id_usuario'";
        
        $query  = $this->db->prepare($sql);
        return $query->execute();

    }
}
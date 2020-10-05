<?php 
class BaseDatos{
    public $mysql=null;    
    
    public  static function conexion(){
        $host= "localhost";
        $user="root";
        $pass="";
        $database="browjipijapa";
        $charset="utf8";
        $opt=[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        
        $pdo = new pdo("mysql:host={$host};dbname={$database};charset={$charset}",$user,$pass,$opt);
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    }
}
?>
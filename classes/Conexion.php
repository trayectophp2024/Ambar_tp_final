<?php

class Conexion {
    //atributos
    public const DB_SERVER = "localhost";
    public const DB_USER = "root";
    public const DB_PASS = "";
    public const DB_NAME = "kiki&lala";

    const DB_DNS = "mysql:host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME . ";charset=utf8mb4" ;

    //atributo con tipo PDO

    protected PDO $db;

    //metodo conducor

    public function __construct(){
    try {
        $this->db = new PDO(self::DB_DNS, self::DB_USER ,self::DB_PASS); 
    } catch (Exception $e) {
         die("Error al conectarse a la base de datos");
    }
        
    }


    //metodo para llamar la conexion en cada archivo

    public function getConexion() : PDO {
        return $this->db;
    }

}
?>
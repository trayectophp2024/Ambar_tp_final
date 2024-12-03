<?php

 class Usuario {
    protected $id;
    protected $email;
    protected $nombre_usuario;
    protected $nombre_completo;
    protected $password;

    /* Encuentra un usuario por sus Username */

    public function usuario_x_username(string $username){
        $resultado= [];
    
        $conexion = (new Conexion())->getConexion();
    
        $query = "SELECT * FROM usuarios WHERE nombre_usuario = ?";
    
        $PDOstatment = $conexion->prepare($query);
    
        $PDOstatment->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOstatment->execute(
            [$username]
        );
    
        $resultado = $PDOstatment->fetch();
    
        if (!$resultado) {
            return null;
        }
    
        return $resultado;
    }


    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of nombre_usuario
     */ 
    public function getNombre_usuario()
    {
        return $this->nombre_usuario;
    }

    /**
     * Get the value of nombre_completo
     */ 
    public function getNombre_completo()
    {
        return $this->nombre_completo;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
 }

?>
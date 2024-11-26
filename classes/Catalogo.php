<?php

    class Catalogo {
         protected $id;
         protected $nombre_catalogo;

         
         /* Todos los productos */
    public function catalogo_completo(): array
    {
        $resultado = [];

        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM catalogos";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatment->execute();

        $resultado = $PDOStatment->fetchAll();

        return $resultado;
    }

    // devuelve los datos de un personaje en particular 
    public function get_x_id(int $id)
    {


        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM catalogos WHERE id = $id";

        $PDOStatment = $conexion->prepare($query);

        $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOStatment->execute();

        $resultado = $PDOStatment->fetch();

        if (!$resultado) {
            return null;
        }

        return $resultado;
    }


         /**
          * Get the value of id
          */ 
         public function getId()
         {
                  return $this->id;
         }

        
        

         /**
          * Get the value of nombre_catalogo
          */ 
         public function getNombre_catalogo()
         {
                  return $this->nombre_catalogo;
         }
    }

?>
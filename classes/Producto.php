<?php

class Producto {
    protected $id;
    protected $nombre;
    protected $descripcion;
    protected $precio;
    protected $marca;
    protected $imagen;
    protected $id_catalogo;

    //metodos
    //devolver el listado completo de los personajes

    public function lista_completa() :array {

        $resultado= [];

        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM productos ";

        $PDOstatment = $conexion->prepare($query);

        $PDOstatment->setFetchMode(PDO::FETCH_CLASS, self::class);
        $PDOstatment->execute();

        $resultado = $PDOstatment->fetchALL();

        return $resultado;
    }

   // Devuelve el catalogo de productos de un personaje en particular 
   public function catalogo_x_categoria(int $id) {
    $catalogo= [];
        
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM productos WHERE id_catalogo = $id";

    $PDOStatment = $conexion->prepare($query);

    $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
    $PDOStatment->execute();

    $catalogo = $PDOStatment->fetchAll();

    return $catalogo;  
}

/* devolver es un producto en particular */


public function producto_x_id(int $idProducto){

    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM productos WHERE id = :idProducto";

    $PDOStatment = $conexion->prepare($query);

    $PDOStatment->setFetchMode(PDO::FETCH_CLASS, self::class);
    $PDOStatment->execute(
        [
            'idProducto' => $idProducto
        ]
    );

    $resultado = $PDOStatment->fetch();

    if(!$resultado){
        return null;
    }

    return $resultado;


}

public function getCatalogo() {
    $catalogo= (new Catalogo())->get_x_id($this->id_catalogo);
    $nombre = $catalogo->getNombre_catalogo();
    return $nombre; 
}





/* metodod para insertar un nuevo personaje  */

public function insert($nombre,$descripcion,$precio,$marca,$imagen,$id_catalogo){
    $conexion = (new Conexion())->getConexion();

    $query= "INSERT INTO productos(id,nombre,descripcion,precio,marca,imagen,id_catalogo)
    VALUES (NULL,:nombre,:descripcion,:precio,:marca,:imagen,:id_catalogo)";

    $PDOstatement = $conexion->prepare($query);


    $PDOstatement->execute(
        [
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'marca' => $marca,
            'imagen' => $imagen,
            'id_catalogo' => $id_catalogo
        ]

    );

}

/* METODO PARA EDITAR UN maquillaje */

public function edit($nombre,$descripcion,$precio,$marca, $id_catalogo,$id){
    $conexion = (new Conexion())->getConexion();

    $query= "UPDATE productos SET nombre = :nombre, descripcion = :descripcion, precio = :precio , marca = :marca , id_catalogo = :id_catalogo WHERE id = :id";

    $PDOstatement = $conexion->prepare($query);


    $PDOstatement->execute(
        [
            'id' => $id,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'marca' => $marca,
            'id_catalogo' => $id_catalogo
        ]

    );

}

 /* Metodo reemplazar imagen */

 public function remplazar_imagen($imagen,$id){
    $conexion = (new Conexion())->getConexion();

    $query= "UPDATE productos SET imagen = :imagen WHERE id = :id";

    $PDOstatement = $conexion->prepare($query);


    $PDOstatement->execute(
        [
            'id' => $id,
            'imagen' => $imagen
        ]

    );

}

/* borrar imagen */

public function delete(){
    $conexion = (new Conexion())->getConexion();

    $query= "DELETE FROM productos WHERE id = ?";

    $PDOstatement = $conexion->prepare($query);

    $PDOstatement->execute([$this->id]);
}


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

  

    /**
     * Get the value of id_catalogo
     */ 
    public function getId_catalogo()
    {
        return $this->id_catalogo;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }
}


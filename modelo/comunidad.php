<?php

include_once '../conexiones/conexion.php';

class Comunidad {
    private $conn;
    private $table_name = "cominidades";

    public $id;
    public $nombre;
    public $direccion;
    public $poblacion;
    public $id_administrador;

    public function __construct() {
        $this->conn = conectarBD();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET nombre=:nombre, direccion=:direccion, poblacion=:poblacion, id_administrador=:id_administrador";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":direccion", $this->direccion);
        $stmt->bindParam(":poblacion", $this->poblacion);
        $stmt->bindParam(":id_administrador", $this->id_administrador);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
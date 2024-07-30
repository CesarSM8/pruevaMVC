<?php

include_once '../models/Comunidad.php';

class ComunidadController {
    private $comunidad;

    public function __construct() {
        $this->comunidad = new Comunidad();
    }

    public function index() {
        $stmt = $this->comunidad->read();
        $comunidades = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include '../views/index.php';
    }

    public function create() {
        if ($_POST) {
            $this->comunidad->nombre = $_POST['nombre'];
            $this->comunidad->direccion = $_POST['direccion'];
            $this->comunidad->poblacion = $_POST['poblacion'];
            $this->comunidad->id_administrador = $_POST['id_administrador'];

            if ($this->comunidad->create()) {
                header("Location: /index.php");
            } else {
                echo "Error al crear la comunidad.";
            }
        }

        include '../views/add_comunidad.php';
    }
}
?>
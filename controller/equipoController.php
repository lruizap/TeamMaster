<?php
require_once __DIR__ . '/../model/equipoM.php';

class EquipoController {
    private $equipoModel;

    public function __construct() {
        $this->equipoModel = new EquipoM();
    }

    // 📌 Listar todos los equipos disponibles
    public function listarEquipos() {
        $equipos = $this->equipoModel->cargarTodosLosEquipos(); // Nueva función en el modelo
        require __DIR__ . '/../view/listadoEquipos.php'; // Nueva vista para mostrar equipos
    }

    // 📌 Listar equipos de un entrenador específico
    public function detalleEntrenador($idEntrenador) {
        $equipos = $this->equipoModel->cargarEquiposEntrenador($idEntrenador);
        require __DIR__ . '/../view/detalleEntrenador.php';
    }
}
?>

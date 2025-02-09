<?php
require_once __DIR__ . '/../model/equipoM.php';

class EquipoController {
    private $equipoModel;

    public function __construct() {
        $this->equipoModel = new EquipoM();
    }

    // 📌 Listar equipos de un entrenador
    public function detalleEntrenador($idEntrenador) {
        $equipos = $this->equipoModel->cargarEquiposEntrenador($idEntrenador);
        require __DIR__ . '/../view/detalleEntrenador.php';
    }
}
?>

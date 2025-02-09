<?php
require_once 'Model.php';

class EquipoM extends Model {

    // 📌 Cargar los equipos que ha entrenado un entrenador
    public function cargarEquiposEntrenador($idEntrenador) {
        $sql = "SELECT * FROM equipos WHERE id_entrenador = ?";
        $stmt = $this->executeQuery($sql, [$idEntrenador]);
        
        if ($stmt) {
            $equipos = $stmt->fetchAll();
            return $equipos ?: -1;
        }
        return -1;
    }

    // 📌 Cambiar entrenador de un equipo
    public function cambiarEntrenador($idEquipo, $idEntrenador) {
        // Verificar si el equipo y el entrenador existen
        $sql = "SELECT id FROM equipos WHERE id = ?";
        if (!$this->executeQuery($sql, [$idEquipo])->fetch()) return -1;

        $sql = "SELECT id FROM entrenadores WHERE id = ?";
        if (!$this->executeQuery($sql, [$idEntrenador])->fetch()) return -1;

        // Actualizar entrenador
        $sql = "UPDATE equipos SET id_entrenador = ? WHERE id = ?";
        return $this->executeQuery($sql, [$idEntrenador, $idEquipo]) ? 1 : -1;
    }
}
?>

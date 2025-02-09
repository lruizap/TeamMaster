<?php
require_once 'Model.php';

class JugadorM extends Model {

    // 📌 Fichar un jugador a un equipo
    public function ficharPorEquipo($idEquipo, $idJugador) {
        // Verificar existencia de equipo y jugador
        $sql = "SELECT id FROM equipos WHERE id = ?";
        if (!$this->executeQuery($sql, [$idEquipo])->fetch()) return -1;

        $sql = "SELECT id FROM jugadores WHERE id = ?";
        if (!$this->executeQuery($sql, [$idJugador])->fetch()) return -1;

        // Verificar límite de jugadores (máximo 20)
        $sql = "SELECT COUNT(*) AS total FROM jugadores WHERE id_equipo = ?";
        $stmt = $this->executeQuery($sql, [$idEquipo]);
        $count = $stmt->fetch()['total'];

        if ($count >= 20) return -1;

        // Asignar jugador al equipo
        $sql = "UPDATE jugadores SET id_equipo = ? WHERE id = ?";
        return $this->executeQuery($sql, [$idEquipo, $idJugador]) ? 1 : -1;
    }

    // 📌 Despedir a un jugador
    public function despedirJugador($idJugador) {
        // Verificar si el jugador existe
        $sql = "SELECT id FROM jugadores WHERE id = ?";
        if (!$this->executeQuery($sql, [$idJugador])->fetch()) return -1;

        // Eliminar jugador
        $sql = "DELETE FROM jugadores WHERE id = ?";
        return $this->executeQuery($sql, [$idJugador]) ? 1 : -1;
    }

    // 📌 Cargar los jugadores de un equipo
    public function cargarJugadoresEquipo($idEquipo) {
        $sql = "SELECT * FROM jugadores WHERE id_equipo = ?";
        $stmt = $this->executeQuery($sql, [$idEquipo]);
        
        if ($stmt) {
            $jugadores = $stmt->fetchAll();
            return $jugadores ?: -1;
        }
        return -1;
    }
}
?>

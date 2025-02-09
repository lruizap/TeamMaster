<?php
require_once __DIR__ . '/../model/jugadorM.php';

class JugadorController {
    private $jugadorModel;

    public function __construct() {
        $this->jugadorModel = new JugadorM();
    }

    // 📌 Listar jugadores de un equipo
    public function listarJugadores($idEquipo) {
        $jugadores = $this->jugadorModel->cargarJugadoresEquipo($idEquipo);
        require __DIR__ . '/../view/detalleJugador.php';
    }

    // 📌 Traspasar jugador a otro equipo
    public function traspasarJugador() {
        $idJugador = $_POST['idJugador'];
        $idEquipo = $_POST['idEquipo'];

        $resultado = $this->jugadorModel->ficharPorEquipo($idEquipo, $idJugador);

        if ($resultado == 1) {
            header("Location: /equipo/$idEquipo");
        } else {
            echo "Error en el traspaso.";
        }
    }

    // 📌 Despedir jugador
    public function despedirJugador() {
        $idJugador = $_POST['idJugador'];

        $resultado = $this->jugadorModel->despedirJugador($idJugador);

        if ($resultado == 1) {
            header("Location: /");
        } else {
            echo "Error al despedir jugador.";
        }
    }

    // 📌 Insertar nuevo jugador
    public function insertarJugador() {
        $nombre = $_POST['nombre'];
        $idEquipo = $_POST['idEquipo'];

        $sql = "INSERT INTO jugadores (nombre, id_equipo) VALUES (?, ?)";
        $stmt = $this->jugadorModel->executeQuery($sql, [$nombre, $idEquipo]);

        if ($stmt) {
            header("Location: /equipo/$idEquipo");
        } else {
            echo "Error al insertar jugador.";
        }
    }
}
?>

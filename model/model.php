<?php
require_once __DIR__ . '/../config/database.php';

class Model {
    protected $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    // Método genérico para ejecutar consultas preparadas
    protected function executeQuery($sql, $params = []) {
        $stmt = $this->db->prepare($sql);
        if ($stmt->execute($params)) {
            return $stmt;
        } else {
            return false;
        }
    }
}
?>

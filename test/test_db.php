<?php
require_once __DIR__ . '/config/database.php';

$conn = Database::getConnection();
if ($conn) {
    echo "✅ Conexión a la base de datos exitosa.";
} else {
    echo "❌ Error en la conexión.";
}
?>

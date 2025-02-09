<?php require_once __DIR__ . '/../config/database.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Entrenador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Equipos de Entrenador</h1>
        <select id="equipoSelect" class="form-select mt-3">
            <?php if ($equipos !== -1): ?>
                <?php foreach ($equipos as $equipo): ?>
                    <option value="<?= $equipo['id'] ?>"><?= $equipo['nombre'] ?></option>
                <?php endforeach; ?>
            <?php else: ?>
                <option>No hay equipos</option>
            <?php endif; ?>
        </select>
        <button class="btn btn-primary mt-3" onclick="cargarJugadores()">Cargar</button>

        <div id="jugadoresLista" class="mt-4"></div>
    </div>

    <script>
        function cargarJugadores() {
            var idEquipo = document.getElementById("equipoSelect").value;
            window.location.href = "/equipo/" + idEquipo;
        }
    </script>
</body>
</html>

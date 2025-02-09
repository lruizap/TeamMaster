<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichar Jugador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Fichar Jugador</h1>
        <form method="POST" action="/jugador/insertar">
            <label for="nombre" class="form-label">Nombre del Jugador:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>

            <label for="idEquipo" class="form-label mt-3">Selecciona un equipo:</label>
            <select name="idEquipo" id="idEquipo" class="form-select">
                <?php foreach ($equipos as $equipo): ?>
                    <option value="<?= $equipo['id'] ?>"><?= $equipo['nombre'] ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit" class="btn btn-success mt-3">Insertar</button>
        </form>
    </div>
</body>
</html>

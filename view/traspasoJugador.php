<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traspasar Jugador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Traspasar Jugador</h1>
        <form method="POST" action="/jugador/traspasar">
            <input type="hidden" name="idJugador" value="<?= $_GET['idJugador'] ?>">
            <label for="idEquipo" class="form-label">Selecciona un equipo:</label>
            <select name="idEquipo" id="idEquipo" class="form-select">
                <?php foreach ($equipos as $equipo): ?>
                    <option value="<?= $equipo['id'] ?>"><?= $equipo['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
            <button type="submit" class="btn btn-primary mt-3">Traspasar</button>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores del Equipo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Jugadores del Equipo</h1>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($jugadores !== -1): ?>
                    <?php foreach ($jugadores as $jugador): ?>
                        <tr>
                            <td><?= $jugador['id'] ?></td>
                            <td><?= $jugador['nombre'] ?></td>
                            <td>
                                <form method="POST" action="/jugador/traspasar" class="d-inline">
                                    <input type="hidden" name="idJugador" value="<?= $jugador['id'] ?>">
                                    <button type="submit" class="btn btn-warning">Traspasar</button>
                                </form>
                                <form method="POST" action="/jugador/despedir" class="d-inline">
                                    <input type="hidden" name="idJugador" value="<?= $jugador['id'] ?>">
                                    <button type="submit" class="btn btn-danger">Despedir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="3">No hay jugadores</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
        <a href="/jugador/insertar" class="btn btn-success mt-3">Fichar Jugador</a>
    </div>
</body>
</html>

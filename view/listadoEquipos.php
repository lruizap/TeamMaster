<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Equipos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Listado de Equipos</h1>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Entrenador</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($equipos !== -1): ?>
                    <?php foreach ($equipos as $equipo): ?>
                        <tr>
                            <td><?= $equipo['id'] ?></td>
                            <td><?= $equipo['nombre'] ?></td>
                            <td><?= $equipo['id_entrenador'] ? $equipo['id_entrenador'] : "Sin entrenador" ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="3">No hay equipos disponibles.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

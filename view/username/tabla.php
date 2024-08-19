<?php
session_start();

require_once(__DIR__ . "/../head/headadmin.php");


// Datos estáticos de videojuegos en lugar de usar la base de datos
$videojuegos = [
    [
        'id' => 1,
        'nombre' => 'Valorant',
        'aniodelanzamiento' => '2020',
        'plataforma' => 'PC',
        'categoria' => 'Shooter'
    ],
    [
        'id' => 2,
        'nombre' => 'The Witcher 3',
        'aniodelanzamiento' => '2015',
        'plataforma' => 'PC, PS4, Xbox',
        'categoria' => 'RPG'
    ],
    // Puedes agregar más videojuegos aquí si lo deseas
];

// Reemplazar la consulta con datos estáticos
$rows = $videojuegos;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabla.css">
    <script type="text/javascript" src="check_session.js"></script>
    <title>Videojuegos</title>
</head>
<body>
    <br>
    <br>
    <br>
    <h1>Videojuegos</h1>
    <br>
    <a href="create.php?" class="btn-2">Agregar</a>
    <div>
        <table>
            <tr>
                <th>Videojuego</th>
                <th>Fecha de lanzamiento</th>
                <th>Plataformas disponibles</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
            <?php if($rows): ?>
                <?php foreach($rows as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row["nombre"]) ?></td>
                        <td><?= htmlspecialchars($row["aniodelanzamiento"]) ?></td>
                        <td><?= htmlspecialchars($row["plataforma"]) ?></td>
                        <td><?= htmlspecialchars($row["categoria"]) ?></td>
                        <td>
                            <a href="edit.php?id=<?= htmlspecialchars($row["id"]) ?>" class="btn-2">Modificar</a>
                            <a href="delete.php?id=<?= htmlspecialchars($row["id"]) ?>" class="btn-2">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No hay videojuegos disponibles.</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>  

    <script>
        // Realiza una solicitud AJAX cada 5 minutos (300,000 milisegundos)
        setInterval(function() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "./php/check_session.php", true);
            xmlhttp.send();
        }, 300000);
    </script>
</body>
</html>

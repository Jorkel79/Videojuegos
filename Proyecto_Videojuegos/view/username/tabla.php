<?php
session_start();

require_once(__DIR__ . "/../head/headadmin.php");
require_once(__DIR__ . "/../../controller/videojuegoController.php");

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); // Redirigir al usuario al inicio de sesión si no ha iniciado sesión
    exit();
}


// Resto de tu código de tabla.php
$obj = new videojuegoController();
$rows = $obj->index();
$row = $rows;
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
                        <td><?= $row["nombre"]?></td>
                        <td><?= $row["aniodelanzamiento"]?></td>
                        <td><?= $row["plataforma"]?></td>
                        <td><?= $row["categoria"]?></td>
                        <td>
                            <a href="edit.php?id=<?=$row["id"]?>" class="btn-2">Modificar</a>
                            <a href="delete.php?id=<?=$row["id"]?>" class="btn-2">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else:?>  
            <?php endif; ?> 
        </table>
    </div>  
    <!-- ... Tu código HTML anterior ... -->

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

</body>
</html>

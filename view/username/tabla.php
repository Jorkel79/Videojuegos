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
        <table id="videojuegosTable">
            <tr>
                <th>Videojuego</th>
                <th>Fecha de lanzamiento</th>
                <th>Plataformas disponibles</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
            <?php if($rows): ?>
                <?php foreach($rows as $row): ?>
                    <tr data-id="<?= htmlspecialchars($row["id"]) ?>">
                        <td><?= htmlspecialchars($row["nombre"]) ?></td>
                        <td><?= htmlspecialchars($row["aniodelanzamiento"]) ?></td>
                        <td><?= htmlspecialchars($row["plataforma"]) ?></td>
                        <td><?= htmlspecialchars($row["categoria"]) ?></td>
                        <td>
                            <button onclick="editarVideojuego(<?= htmlspecialchars($row["id"]) ?>)" class="btn-2">Modificar</button>
                            <button onclick="eliminarVideojuego(<?= htmlspecialchars($row["id"]) ?>)" class="btn-2">Eliminar</button>
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

    <!-- Formulario de edición (se muestra cuando se va a editar un videojuego) -->
    <div id="editForm" style="display:none;">
        <h2>Editar Videojuego</h2>
        <form>
            <input type="hidden" id="editId">
            <label for="editNombre">Nombre:</label>
            <input type="text" id="editNombre"><br><br>
            <label for="editAnio">Año de lanzamiento:</label>
            <input type="text" id="editAnio"><br><br>
            <label for="editPlataforma">Plataforma:</label>
            <input type="text" id="editPlataforma"><br><br>
            <label for="editCategoria">Categoría:</label>
            <input type="text" id="editCategoria"><br><br>
            <button type="button" onclick="guardarCambios()">Guardar</button>
            <button type="button" onclick="cancelarEdicion()">Cancelar</button>
        </form>
    </div>

    <script>
        function editarVideojuego(id) {
            // Obtener la fila a editar
            var fila = document.querySelector('tr[data-id="' + id + '"]');
            
            // Obtener los datos actuales del videojuego
            var nombre = fila.cells[0].innerText;
            var anio = fila.cells[1].innerText;
            var plataforma = fila.cells[2].innerText;
            var categoria = fila.cells[3].innerText;
            
            // Mostrar el formulario de edición con los valores actuales
            document.getElementById('editId').value = id;
            document.getElementById('editNombre').value = nombre;
            document.getElementById('editAnio').value = anio;
            document.getElementById('editPlataforma').value = plataforma;
            document.getElementById('editCategoria').value = categoria;
            
            document.getElementById('editForm').style.display = 'block';
        }

        function guardarCambios() {
            var id = document.getElementById('editId').value;
            var nombre = document.getElementById('editNombre').value;
            var anio = document.getElementById('editAnio').value;
            var plataforma = document.getElementById('editPlataforma').value;
            var categoria = document.getElementById('editCategoria').value;
            
            // Actualizar los valores en la tabla
            var fila = document.querySelector('tr[data-id="' + id + '"]');
            fila.cells[0].innerText = nombre;
            fila.cells[1].innerText = anio;
            fila.cells[2].innerText = plataforma;
            fila.cells[3].innerText = categoria;
            
            // Ocultar el formulario de edición
            document.getElementById('editForm').style.display = 'none';
        }

        function cancelarEdicion() {
            document.getElementById('editForm').style.display = 'none';
        }

        function eliminarVideojuego(id) {
            // Eliminar la fila de la tabla
            var fila = document.querySelector('tr[data-id="' + id + '"]');
            fila.parentNode.removeChild(fila);
        }
    </script>
</body>
</html>

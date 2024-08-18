<?php
require_once(__DIR__ . "/../../controller/videojuegoController.php");

if (isset($_POST['usuario']) && isset($_POST['contrasenia'])) {
    $obj = new videojuegoController();
    $obj->agregarUsuario($_POST['usuario'], $_POST['contrasenia']);
} else {
    // Manejar el caso en el que las claves no están presentes
    echo "Error: Campos de usuario y contraseña no presentes en el formulario.";
}
?>

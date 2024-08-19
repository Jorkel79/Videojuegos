<?php
    require_once(__DIR__ . "/../../controller/videojuegoController.php");
    $obj = new videojuegoController();
    $obj->guardar($_POST['nombre'], $_POST['aniodelanzamiento'], $_POST['plataforma'], $_POST['categoria'], $_POST['imagenurl'], $_POST['compraurl']);
?>
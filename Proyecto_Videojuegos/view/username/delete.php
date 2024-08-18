<?php
    require_once("../../controller/videojuegoController.php");
    $obj = new videojuegoController();
    $obj->delete($_GET['id']);

?>
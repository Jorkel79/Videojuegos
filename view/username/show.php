<?php
    require_once(__DIR__ . "/../head/head.php");
    require_once(__DIR__ . "/../../controller/videojuegoController.php");
    $obj = new videojuegoController();
    $date = $obj->show($_GET['id']);
?>

<link rel="stylesheet" href="show.css?v=1">
    <div class="containerShow">
        <h4>Valorant></h4>
        <div class="row">
            <div class="box">
                <img src="https://th.bing.com/th/id/R.01932739f0b75a9e865746ae90f88d04?rik=OSaS%2fM2eQjMhhA&pid=ImgRaw&r=0" class="imagenver">
            </div>
            <div class="box">
                <h2>Año De Lanzamineto</h2>
                <h3>2001</h3>
                <h2>Plataformas</h2>     
                <h3>Pc</h3> 
                <h2>Categoria</h2>
                <h3>Shoother</h3> 
                <h2>¿Donde comprar?</h2> 
                <button class="btn-2" >COMPRAR</button>
            </div>
        </div>
        <div class="third-box">
            <a href="index.php" class="btn-2">Regresar</a>
        </div>
    </div>

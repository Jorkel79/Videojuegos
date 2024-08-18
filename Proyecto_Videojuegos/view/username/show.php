<?php
    require_once(__DIR__ . "/../head/head.php");
    require_once(__DIR__ . "/../../controller/videojuegoController.php");
    $obj = new videojuegoController();
    $date = $obj->show($_GET['id']);
?>

<link rel="stylesheet" href="show.css?v=1">
    <div class="containerShow">
        <h4><?= $date[1]?></h4>
        <div class="row">
            <div class="box">
                <img src="<?=$date["imagenurl"]?>" class="imagenver">
            </div>
            <div class="box">
                <h2>Año De Lanzamineto</h2>
                <h3>- <?= $date[2]?></h3>
                <h2>Plataformas</h2>     
                <h3>- <?= $date[3]?></h3> 
                <h2>Categoria</h2>
                <h3>- <?= $date[4]?></h3> 
                <h2>¿Donde comprar?</h2> 
                <button class="btn-2" onclick="location.href='<?= $date[6]?>'">COMPRAR</button>
            </div>
        </div>
        <div class="third-box">
            <a href="index.php" class="btn-2">Regresar</a>
        </div>
    </div>

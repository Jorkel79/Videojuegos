<?php


require_once(__DIR__ . "/../head/head.php");



// Datos estáticos de videojuegos
$videojuegos = [
    [
        'id' => 1,
        'nombre' => 'Valorant',
        'aniodelanzamiento' => '2020',
        'plataforma' => 'PC',
        'categoria' => 'Shooter',
        'imagenurl' => 'https://example.com/image1.jpg'
    ],
    [
        'id' => 2,
        'nombre' => 'The Witcher 3',
        'aniodelanzamiento' => '2015',
        'plataforma' => 'PC, PS4, Xbox',
        'categoria' => 'RPG',
        'imagenurl' => 'https://example.com/image2.jpg'
    ],
    [
        'id' => 3,
        'nombre' => 'Cyberpunk 2077',
        'aniodelanzamiento' => '2020',
        'plataforma' => 'PC, PS4, Xbox',
        'categoria' => 'RPG',
        'imagenurl' => 'https://example.com/image3.jpg'
    ],
];

// Filtrar por categoría (simulado)
$categoriaSeleccionada = isset($_GET['categoria']) ? urldecode($_GET['categoria']) : null;
if ($categoriaSeleccionada) {
    $rows = array_filter($videojuegos, function($juego) use ($categoriaSeleccionada) {
        return $juego['categoria'] === $categoriaSeleccionada;
    });
} else {
    $rows = $videojuegos;
}

// Obtener categorías únicas para el filtro (simulado)
$categorias = array_unique(array_column($videojuegos, 'categoria'));
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/username/videojuego.css?v=1">
    <title>Videojuegos</title>
</head>

<body>

    <header class="header">
        <div class="header-content container">
            <div class="header-txt">
                <h1>Tus nuevos <span>juegos</span> <br> favoritos</h1>
                <p>
                    Jorge Raul Valencia Santos,<br>
                    Jose Alfredo Salinas Caudillo,<br>
                    Diego Alberto Canto Ricardez
                </p>
                <div class="butons">
                    <a href="" class="btn-1">Informacion</a>
                    <a href="#juegos" class="btn-1">Juegos</a>
                </div>
            </div>
        </div>
    </header>

    <section class="popular container">
        <h2>Juegos Populares</h2>
        <div class="popular-content">
            <img src="images/images/g1.jpg" alt="">
            <img src="images/images/g2.jpg" alt="">
            <img src="images/images/g3.jpg" alt="">
            <img src="images/images/g4.jpg" alt="">
            <img src="images/images/g5.jpg" alt="">
            <img src="images/images/g6.jpg" alt="">
            <img src="images/images/g7.jpg" alt="">
        </div>
    </section>

    <main class="product container">
        <h2>Todos los juegos</h2>
        <section class="contenedor categorias">
            <div class="butons">
                <a href="index.php" class="btn-1">Todo</a>
                <?php foreach ($categorias as $categoria): ?>
                    <a href="index.php?categoria=<?= urlencode($categoria) ?>" class="btn-1"><?= htmlspecialchars($categoria) ?></a>
                <?php endforeach; ?>
            </div>
        </section>
        <div class="product-content" id="juegos">
            <?php if ($rows): ?>
                <?php foreach ($rows as $row): ?>
                    <div class="product-1">
                        <?php if (isset($row["imagenurl"])): ?>
                            <img src="<?= htmlspecialchars($row["imagenurl"]) ?>" alt="<?= htmlspecialchars($row["nombre"]) ?>">
                        <?php endif; ?>
                        <div class="product-txt">
                            <?php if (isset($row["nombre"])): ?>
                                <h3><?= htmlspecialchars($row["nombre"]) ?></h3>
                            <?php endif; ?>
                            <?php if (isset($row["aniodelanzamiento"])): ?>
                                <h3><?= htmlspecialchars($row["aniodelanzamiento"]) ?></h3>
                            <?php endif; ?>
                            <a href="show.php">Ver</a>
                            <div class="price">
                                <!-- Resto del código para mostrar cada registro -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay registros disponibles.</p>
            <?php endif; ?>
        </div>
    </main>

    <section class="contact container">
        <div class="contact-content">
            <h3>Pasamos?</h3>
            <form>
                <input type="text" placeholder="Minimo 10">
                <input type="submit" class="btn-3" value="ENVIAR">
            </form>
        </div>
    </section>

    <footer class="footer container">
        <div>
            <a href="#" class="logo">LOGO</a>
        </div>
        <div class="link">
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="login.php">Iniciar Sesion</a></li>
            </ul>
        </div>
    </footer>

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

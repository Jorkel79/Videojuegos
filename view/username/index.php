<?php
session_start();

// Verificar sesión activa y redirigir si es necesario
if (isset($_SESSION['usuario'])) {
    // La sesión está activa, puedes redirigir a la página de inicio
    header("Location: tabla.php");
    exit();
}


// Verificar inactividad y cerrar sesión
$inactivity_timeout = 60; // 1 minuto

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $inactivity_timeout)) {
    session_unset(); // Limpia todas las variables de sesión
    session_destroy(); // Destruye la sesión
    $logout_message = "Tu sesión ha sido cerrada automáticamente debido a inactividad."; // Mensaje para mostrar en la alerta
    $_SESSION['logout_message'] = $logout_message; // Almacena el mensaje en una variable de sesión
    header("Location: login.php"); // Redirige a la página de inicio de sesión después del cierre de sesión
    exit();
}

// Actualiza el tiempo de la última actividad
$_SESSION['last_activity'] = time();
?>

<?php
require_once(__DIR__ . "/../head/head.php");
require_once(__DIR__ . "/../../controller/videojuegoController.php");
$obj = new videojuegoController();
$rows = $obj->index();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/username/videojuego.css?v=1">
</head>

<body>

    <header class="header">
        <div class="header-content container">
            <div class="header-txt">
                <h1>Tus nuevos <span>juegos</span> <br> favoritos</h1>
                <p>
                    Jorge Raul Valencia Santos,
                    Jose Alfredo Salinas Caudillo,
                    Cristian de Jesus Vergara Valerio.
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
        <!-- Agregar esta sección antes del bucle foreach de productos -->
        <section class="contenedor categorias">
        <div class="butons">
                <a href="index.php" class="btn-1">Todo</a>
                <?php foreach ($obj->getCategories() as $categoria): ?>

                    <a href="index.php?categoria=<?= urlencode($categoria) ?>" class="btn-1"><?= $categoria ?></a>
                <?php endforeach; ?>
        </div>
        </section>
        <div class="product-content" id="juegos">
            
            <?php
$categoriaSeleccionada = isset($_GET['categoria']) ? urldecode($_GET['categoria']) : null;
// Obtén los registros de la base de datos según la categoría seleccionada
if ($categoriaSeleccionada) {
    $rows = $obj->getJuegosByCategoria($categoriaSeleccionada);
} else {
    // Si no hay categoría seleccionada, obtén todos los registros
    $rows = $obj->index();
}
if ($rows): ?>
            <?php foreach ($rows as $row): ?>
            <div class="product-1">
                <?php if (isset($row["imagenurl"])): ?>
                <img src="<?= $row["imagenurl"] ?>">
                <?php endif; ?>
                <div class="product-txt">
                    <?php if (isset($row["nombre"])): ?>
                    <h3><?= $row["nombre"] ?></h3>
                    <?php endif; ?>
                    <?php if (isset($row["aniodelanzamiento"])): ?>
                    <h3><?= $row["aniodelanzamiento"] ?></h3>
                    <?php endif; ?>
                    <a href="show.php?id=<?= $row["id"] ?>" class="btn-2">Ver</a>
                    <div class="price">
                        <!-- Resto del código para mostrar cada registro -->
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="6" class="text-center">No hay Registro</td>
            </tr>
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
                <li><a href="">Iniciar Sesion</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
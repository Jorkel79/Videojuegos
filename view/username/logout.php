<?php
// Iniciar sesión
session_start();

// Destruir todas las sesiones (si deseas mantener esto)
session_destroy();

// Redirigir al formulario de login
header("Location: login.php");
exit();
?>

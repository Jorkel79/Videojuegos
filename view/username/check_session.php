<?php

if (session_status() == PHP_SESSION_NONE) {
    // Si no hay sesión activa, inicia la sesión
    session_start();
}

$inactivity_timeout = 30; // 1 minuto

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $inactivity_timeout)) {
    $logout_message = "Tu sesión ha sido cerrada automáticamente debido a inactividad."; // Mensaje para mostrar en la alerta
    $_SESSION['logout_message'] = $logout_message; // Almacena el mensaje en una variable de sesión
    echo json_encode(['logout_message' => $logout_message]); // Envía la respuesta como JSON
    exit(); // Asegura que no se procese ninguna salida adicional
}

$_SESSION['last_activity'] = time();

?>
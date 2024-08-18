<?php
session_start();

// Verificar si se enviaron los datos de usuario a través de POST
if(isset($_POST['usuario'])) {
    // Obtener el nombre de usuario enviado desde el formulario
    $usuario = $_POST['usuario'];

    // Aquí puedes realizar cualquier lógica adicional, como verificar la contraseña en una base de datos
    
    // Establecer variables de sesión
    $_SESSION['usuario'] = $usuario;

    // Respondemos con éxito
    echo "success";
} else {
    // Si no se enviaron datos de usuario, respondemos con un error
    echo "error";
}
?>

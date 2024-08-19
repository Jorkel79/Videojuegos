<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <title>Login</title>
</head>
<body>
<div class="wrapper">
    <div class="login_box">
        <div class="login-header">
            <span>Login</span>
        </div>

        <div id="alerta" style="display:none"></div>

        <form method="POST" onsubmit="validarCredenciales(); return false;">
            <div class="input_box">
                <input type="text" name="usuario" id="user" class="input-field" required>
                <label for="user" class="label">Usuario</label>
                <i class="bx bx-user icon"></i>
            </div>

            <div class="input_box">
                <input type="password" name="contrasenia" id="pass" class="input-field" required>
                <label for="pass" class="label">Contraseña</label>
                <i class="bx bx-lock-alt icon"></i>
            </div>

            <div class="remember-forgot">
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Recuérdame</label>
                </div>

                <div class="forgot">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </div>

            <div class="input_box">
                <input type="submit" class="input-submit" value="Iniciar Sesión">
            </div>
        </form>

        <div class="register">
            <span>No tienes una cuenta? <a href="register.php">Registrar</a></span>
        </div>
    </div>
</div>

<script>
    var intentosFallidos = 0;

    function validarCredenciales() {
        var usuario = document.getElementById('user').value;
        var contrasenia = document.getElementById('pass').value;

        if (usuario === 'admin' && contrasenia === 'admin') {
            // Inicio de sesión exitoso
            alert("Inicio de sesión exitoso");
            window.location.href = './index.php'; // Redirige a una página ficticia de inicio
        } else {
            // Inicio de sesión fallido
            intentosFallidos++;
            if (intentosFallidos < 3) {
                alert("Credenciales incorrectas. Inténtalo de nuevo.");
            } else {
                alert("Has excedido el número de intentos permitidos. Intenta más tarde.");
                document.getElementById('user').disabled = true;
                document.getElementById('pass').disabled = true;
                document.querySelector('.input-submit').disabled = true;
            }
        }
    }
</script>

</body>
</html>

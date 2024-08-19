<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="./css/adicionalStyle.css">
    <script type="text/javascript" src="./js/registro.js"></script>
    <title>Registro</title>
</head>
<body>
    <div class="wrapper">
        <div class="login_box">
            <div class="login-header">
                <span>Registro</span>
            </div>
            <form class="col-3" method="POST" action="registrar.php" name="registro" onsubmit="return validarFormulario()">

                <div class="input_box">
                    <label for="Nombre" class="label">Usuario</label>
                    <input type="text" class="input-field" id="Nombre" name="usuario" required>
                </div>

                <div class="input_box">
                    <label for="exampleInputPassword1" class="label">Contraseña</label>
                    <input type="password" class="input-field" id="exampleInputPassword1" name="contrasenia" required>
                </div>

                <div class="register">
                    <button type="submit" class="input-submit">Registrar</button>
                    <a href="./login.php" class="btn-1">Ya Tengo Cuenta</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>

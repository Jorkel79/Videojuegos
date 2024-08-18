<?php
require_once(__DIR__ . "/../model/loginModel.php");

class loginController {
    private $model;

    public function __construct() {
        $this->model = new loginModel();
    }

    public function processLogin($username, $password) {
        // Verifica las credenciales utilizando el modelo.
        if ($this->model->verifyCredentials($username, $password)) {
            // Si las credenciales son correctas, redirige al usuario a index.php
            header("Location: /MVC_PROYECTO_1/view/username/tabla.php");
            exit(); // Asegura que no se ejecute más código después de la redirección.
        } else {
            // Si las credenciales son incorrectas, redirige al usuario a login.php
            header("Location:login.php");
            exit(); // Asegura que no se ejecute más código después de la redirección.
        }
    }
}
?>

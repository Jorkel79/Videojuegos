<<<<<<< HEAD
<?php
require_once(__DIR__ . "/../config/db.php");

class loginModel {
    private $db;

    public function __construct() {
        $this->db = db::getInstance();
    }

    public function verifyCredentials($username, $password) {
        // Utiliza consultas preparadas para mayor seguridad.
        $stmt = $this->db->conexion()->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND contrasenia = :contrasenia");
        $stmt->bindParam(':usuario', $username);
        $stmt->bindParam(':contrasenia', $password);
        $stmt->execute();

        // Obtiene el resultado de la consulta.
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Retorna true si las credenciales son válidas, de lo contrario, retorna false.
        return ($result !== false);
    }
}
?>
=======
<?php
require_once(__DIR__ . "/../config/db.php");

class loginModel {
    private $db;

    public function __construct() {
        $this->db = db::getInstance();
    }

    public function verifyCredentials($username, $password) {
        // Utiliza consultas preparadas para mayor seguridad.
        $stmt = $this->db->conexion()->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND contrasenia = :contrasenia");
        $stmt->bindParam(':usuario', $username);
        $stmt->bindParam(':contrasenia', $password);
        $stmt->execute();

        // Obtiene el resultado de la consulta.
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Retorna true si las credenciales son válidas, de lo contrario, retorna false.
        return ($result !== false);
    }
}
?>
>>>>>>> c61647411340d1d218d1c77225195ed61f904424

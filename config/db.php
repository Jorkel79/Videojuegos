<?php

class db {
    private static $instance = null;
    private $host = "localhost";
    private $dbname = "proyecto";
    private $user = "root";
    private $password = "";

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new db();
        }
        return self::$instance;
    }

    public function conexion() {
        try {
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    
}



/*$instance: Es una variable privada y estática que se inicializa como null.
$host: Es una variable privada que almacena el nombre del host de la base de datos. En este caso, el valor es "localhost".
$dbname: Es una variable privada que almacena el nombre de la base de datos. En este caso, el valor es "prueba".
$user: Es una variable privada que almacena el nombre de usuario de la base de datos. En este caso, el valor es "root".
$password: Es una variable privada que almacena la contraseña de la base de datos. En este caso, el valor es "".


La clase también tiene dos métodos:

getInstance(): Es un método público y estático que devuelve una instancia de la clase db. 
Si la variable $instance es null, se crea una nueva instancia de la clase y se asigna a $instance. Luego, se devuelve $instance.
conexion(): Es un método público que devuelve una conexión a la base de datos. Primero, 
se crea una nueva instancia de la clase PDO con los valores de $host, $dbname, $user y $password. Luego, 
se devuelve la instancia de PDO. Si ocurre un error, se devuelve el mensaje de error.
*/

?>
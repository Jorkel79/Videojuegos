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
?>
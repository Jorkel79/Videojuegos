<<<<<<< HEAD:model/videojuegoModel.php
<<<<<<< HEAD
=======
>>>>>>> 4e81910dd553fcae06459837210cb6717b8e4fcd:Proyecto_Videojuegos/model/videojuegoModel.php
<?php

    class videojuegoModel{
        private $PDO;
        public function __construct(){
            require_once(__DIR__ . "/../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function insertar($nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl){
            $stament = $this->PDO->prepare("INSERT INTO videojuegos VALUES(null,:nombre,:aniodelanzamiento,:plataforma,:categoria,:imagenurl,:compraurl)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":aniodelanzamiento",$aniodelanzamiento);
            $stament->bindParam(":plataforma",$plataforma);
            $stament->bindParam(":categoria",$categoria);
            $stament->bindParam(":imagenurl",$imagenurl);
            $stament->bindParam(":compraurl",$compraurl);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function agregarusuario($usuario, $contrasenia) {
            $stament = $this->PDO->prepare("INSERT INTO usuarios VALUES(null, :usuario, :contrasenia)");
            $stament->bindParam(":usuario", $usuario);
        
            // Hashea la contraseña antes de almacenarla
            $hashedPassword = password_hash($contrasenia, PASSWORD_DEFAULT);
            $stament->bindParam(":contrasenia", $hashedPassword);
        
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM videojuegos where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function index() {
            if (!$this->PDO instanceof PDO) {
                // Manejar el caso en que $this->PDO no es un objeto PDO
                return [];
            }
            $query = "SELECT * FROM videojuegos";
            $stmt = $this->PDO->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            return $result;
        }

        public function update($id,$nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl){
            $stament = $this->PDO->prepare("UPDATE videojuegos SET nombre = :nombre, aniodelanzamiento = :aniodelanzamiento, plataforma = :plataforma, categoria = :categoria, imagenurl = :imagenurl, compraurl = :compraurl WHERE id = :id;");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":id",$id);
            $stament->bindParam(":aniodelanzamiento",$aniodelanzamiento);
            $stament->bindParam(":plataforma",$plataforma);
            $stament->bindParam(":categoria",$categoria);
            $stament->bindParam(":imagenurl",$imagenurl);
            $stament->bindParam(":compraurl",$compraurl);
            return ($stament->execute()) ? $id : false ;

        }

        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM videojuegos WHERE id= :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
        // videojuegoModel.php
        

        
        public function getJuegosByCategoria($categoria) {
            // Cambia la consulta SQL para seleccionar columnas específicas por nombre
            $query = "SELECT  id,imagenurl, nombre, aniodelanzamiento FROM videojuegos WHERE categoria = :categoria";
            $stmt = $this->PDO->prepare($query);  
            $stmt->bindParam(":categoria", $categoria, PDO::PARAM_STR);
            $stmt->execute();
        
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getCategories() {
            // Realiza la consulta a la base de datos y obtén las categorías
            $query = "SELECT DISTINCT categoria FROM videojuegos";
            $stmt = $this->PDO->query($query);
            
            // Verifica si la consulta fue exitosa
            if ($stmt) {
                // Retorna un array con las categorías
                return $stmt->fetchAll(PDO::FETCH_COLUMN);
            } else {
                // En caso de error, puedes manejarlo según tus necesidades
                return array();
            }
        }

       
    // ... otras funciones del modelo ...

    public function verificarCredenciales($usuario, $contrasenia) {
        if (!$this->PDO instanceof PDO) {
            return false;
        }
        $stmt = $this->PDO->prepare("SELECT contrasenia FROM usuarios WHERE usuario = :usuario");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($contrasenia, $user['contrasenia'])) {
            return true;
        } else {
            return false;
        }
    }
    


        
    }


<<<<<<< HEAD:model/videojuegoModel.php
=======
<?php

    class videojuegoModel{
        private $PDO;
        public function __construct(){
            require_once(__DIR__ . "/../config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function insertar($nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl){
            $stament = $this->PDO->prepare("INSERT INTO videojuegos VALUES(null,:nombre,:aniodelanzamiento,:plataforma,:categoria,:imagenurl,:compraurl)");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":aniodelanzamiento",$aniodelanzamiento);
            $stament->bindParam(":plataforma",$plataforma);
            $stament->bindParam(":categoria",$categoria);
            $stament->bindParam(":imagenurl",$imagenurl);
            $stament->bindParam(":compraurl",$compraurl);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function agregarusuario($usuario, $contrasenia) {
            $stament = $this->PDO->prepare("INSERT INTO usuarios VALUES(null, :usuario, :contrasenia)");
            $stament->bindParam(":usuario", $usuario);
        
            // Hashea la contraseña antes de almacenarla
            $hashedPassword = password_hash($contrasenia, PASSWORD_DEFAULT);
            $stament->bindParam(":contrasenia", $hashedPassword);
        
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM videojuegos where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function index() {
            if (!$this->PDO instanceof PDO) {
                // Manejar el caso en que $this->PDO no es un objeto PDO
                return [];
            }
            $query = "SELECT * FROM videojuegos";
            $stmt = $this->PDO->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            return $result;
        }

        public function update($id,$nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl){
            $stament = $this->PDO->prepare("UPDATE videojuegos SET nombre = :nombre, aniodelanzamiento = :aniodelanzamiento, plataforma = :plataforma, categoria = :categoria, imagenurl = :imagenurl, compraurl = :compraurl WHERE id = :id;");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":id",$id);
            $stament->bindParam(":aniodelanzamiento",$aniodelanzamiento);
            $stament->bindParam(":plataforma",$plataforma);
            $stament->bindParam(":categoria",$categoria);
            $stament->bindParam(":imagenurl",$imagenurl);
            $stament->bindParam(":compraurl",$compraurl);
            return ($stament->execute()) ? $id : false ;

        }

        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM videojuegos WHERE id= :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
        // videojuegoModel.php
        

        
        public function getJuegosByCategoria($categoria) {
            // Cambia la consulta SQL para seleccionar columnas específicas por nombre
            $query = "SELECT  id,imagenurl, nombre, aniodelanzamiento FROM videojuegos WHERE categoria = :categoria";
            $stmt = $this->PDO->prepare($query);  
            $stmt->bindParam(":categoria", $categoria, PDO::PARAM_STR);
            $stmt->execute();
        
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getCategories() {
            // Realiza la consulta a la base de datos y obtén las categorías
            $query = "SELECT DISTINCT categoria FROM videojuegos";
            $stmt = $this->PDO->query($query);
            
            // Verifica si la consulta fue exitosa
            if ($stmt) {
                // Retorna un array con las categorías
                return $stmt->fetchAll(PDO::FETCH_COLUMN);
            } else {
                // En caso de error, puedes manejarlo según tus necesidades
                return array();
            }
        }

       
    // ... otras funciones del modelo ...

    public function verificarCredenciales($usuario, $contrasenia) {
        if (!$this->PDO instanceof PDO) {
            return false;
        }
        $stmt = $this->PDO->prepare("SELECT contrasenia FROM usuarios WHERE usuario = :usuario");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($contrasenia, $user['contrasenia'])) {
            return true;
        } else {
            return false;
        }
    }
    


        
    }


>>>>>>> c61647411340d1d218d1c77225195ed61f904424
=======
>>>>>>> 4e81910dd553fcae06459837210cb6717b8e4fcd:Proyecto_Videojuegos/model/videojuegoModel.php
?>
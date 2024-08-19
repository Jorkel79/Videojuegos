<<<<<<< HEAD:controller/videojuegoController.php
<<<<<<< HEAD
=======
>>>>>>> 4e81910dd553fcae06459837210cb6717b8e4fcd:Proyecto_Videojuegos/controller/videojuegoController.php
<?php

    class videojuegoController{
        private $model;
        
        public function __construct(){
            require_once(__DIR__ . "/../model/videojuegoModel.php");

            $this->model = new videojuegoModel();
        }
        
        public function guardar($nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl){
            $id = $this->model->insertar($nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl);
            return ($id!=false ) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }

        public function agregarUsuario($usuario,$contrasenia){
            $id = $this->model->agregarusuario($usuario,$contrasenia);
            return ($id!=false ) ? header("Location:index.php?") : header("Location:index.php");
        }

        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }

        public function index(){
            return ($this->model->index()) ? $this->model->index() : false ;
        }

        
        public function update($id,$nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl){
            return ($this->model->update($id,$nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }

        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
        }
        // videojuegoController.php
        public function getJuegosByCategoria($categoria){
            return($this->model->getJuegosByCategoria($categoria));

        }

        public function getCategories() {
            // Obtener las categorías desde la base de datos usando tu modelo
            $categorias = $this->model->getCategories();
            
            // Verificar si se obtuvieron categorías
            if ($categorias) {
                return $categorias;
            } else {
                // En caso de que no haya categorías, puedes retornar un array vacío o manejarlo según tus necesidades
                return array();
            }
        }

        public function verificarCredenciales($usuario, $contrasenia) {
            // Crear una instancia del modelo
            $obj = new videojuegoModel();
        
            // Llamada a la función verificarCredenciales del modelo
            if ($obj->verificarCredenciales($usuario, $contrasenia)) {
                // Credenciales válidas, inicia sesión y redirige
                $_SESSION['usuario'] = $usuario;
                header("Location:index.php");
                exit();
            } else {
                // Credenciales incorrectas, muestra un mensaje de error
                echo "Credenciales incorrectas";
            }
        }
    }    

<<<<<<< HEAD:controller/videojuegoController.php
=======
<?php

    class videojuegoController{
        private $model;
        
        public function __construct(){
            require_once(__DIR__ . "/../model/videojuegoModel.php");

            $this->model = new videojuegoModel();
        }
        
        public function guardar($nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl){
            $id = $this->model->insertar($nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl);
            return ($id!=false ) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }

        public function agregarUsuario($usuario,$contrasenia){
            $id = $this->model->agregarusuario($usuario,$contrasenia);
            return ($id!=false ) ? header("Location:index.php?") : header("Location:index.php");
        }

        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }

        public function index(){
            return ($this->model->index()) ? $this->model->index() : false ;
        }

        
        public function update($id,$nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl){
            return ($this->model->update($id,$nombre,$aniodelanzamiento,$plataforma,$categoria,$imagenurl,$compraurl) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }

        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id);
        }
        // videojuegoController.php
        public function getJuegosByCategoria($categoria){
            return($this->model->getJuegosByCategoria($categoria));

        }

        public function getCategories() {
            // Obtener las categorías desde la base de datos usando tu modelo
            $categorias = $this->model->getCategories();
            
            // Verificar si se obtuvieron categorías
            if ($categorias) {
                return $categorias;
            } else {
                // En caso de que no haya categorías, puedes retornar un array vacío o manejarlo según tus necesidades
                return array();
            }
        }

        public function verificarCredenciales($usuario, $contrasenia) {
            // Crear una instancia del modelo
            $obj = new videojuegoModel();
        
            // Llamada a la función verificarCredenciales del modelo
            if ($obj->verificarCredenciales($usuario, $contrasenia)) {
                // Credenciales válidas, inicia sesión y redirige
                $_SESSION['usuario'] = $usuario;
                header("Location:index.php");
                exit();
            } else {
                // Credenciales incorrectas, muestra un mensaje de error
                echo "Credenciales incorrectas";
            }
        }
    }    

>>>>>>> c61647411340d1d218d1c77225195ed61f904424
=======
>>>>>>> 4e81910dd553fcae06459837210cb6717b8e4fcd:Proyecto_Videojuegos/controller/videojuegoController.php
?>
<?php
    require_once(__DIR__ . "/../head/head.php");

?>

    <form action="store.php" method="POST" autocomplete="off">    
        <section class="contact container">
            <div class="contact-content">
                <h3>AGREGA LOS DATOS DEL VIDEOJUEGO</h3>
                <div class="form-group">
                    <label for="exampleInputEmail1"  class="form-label">Nombre de juego</label>
                    <input type="text" name="nombre" placeholder="Nombre del juego" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Año de lanzamiento</label>
                    <input type="date" name="aniodelanzamiento" placeholder="Año de lanzamiento" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Plataforma</label>
                    <input type="text" name="plataforma" placeholder="Plataforma" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Categoria</label>
                    <select class="select" name="categoria" >
                        <option name="categoria">shooter</option>
                        <option name="categoria">sandbox</option>
                        <option name="categoria">Mundo abierto</option>
                        <option name="categoria">Peleas</option>
                        <option name="categoria">RPG</option>
                        <option name="categoria">Mobals</option>
                        <option name="categoria">Un solo Jugador</option>
                        <option name="categoria">Accion-Aventura</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Imagen</label>
                    <input type="text" name="imagenurl" placeholder="Imagen" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Link de Compra</label>
                    <input type="text" name="compraurl" placeholder="Link de compra" required>
                </div>
                    
                <input type="submit" class="btn-3" value="Guardar">
                <a class="btn-3" href="index.php">Cancelar</a>
            
            </div>
        </section>

    </form>
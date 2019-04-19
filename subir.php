<?php 
require_once ("includes/header.php");


$autores = $mysqli->query("SELECT * FROM autor");

if (isset($_POST["registrar"]))
{
if ($mysqli->query("INSERT INTO libro (nombre, publicacion, sinopsis, id_autor, id_genero) VALUES ('{$_POST["titulo"]}', '{$_POST["publicacion"]}','{$_POST["sinopsis"]}', '{$_POST["autor"]}', '{$_POST["genero"]}')"))
{
     $ulti = $mysqli->query("SELECT id_libro 
                     FROM libro 
                     ORDER BY id_libro 
                     DESC LIMIT 1");
     $ultimo = $ulti->fetch_assoc();
     if (is_dir("images\libros"))
     { 
        $nombre = $ultimo["id_libro"].'.jpg';
        if(move_uploaded_file($_FILES["image"]["tmp_name"], "images/libros/".$nombre ))
        {
          $mysqli->query("UPDATE libro
                          SET img = '{$nombre}'
                          WHERE id_libro = '{$ultimo["id_libro"]}' ");
        }
     }
}
 
 
// $ext = pathinfo($_FILES["image"]["name"] , PATHINFO_EXTENSION);

}

?>
      <script type="text/javascript" src="js/jquery.min.js"></script>      
      <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>   
<div class="container">
    <div class="row">
        <div class="col-12">
        <form action="subir.php" method="post" enctype = multipart/form-data>
          <div class = "mt-3">
                <label for = "autor">Autor</label>
                <select name = "autor" class = "form-control" id="autor" required>
                    <option value="0">Selecciona un autor</option>
                    <?php foreach($autores as $autor)
                    {?>
                        <option value="<?=$autor["id_autor"]?>"><?=$autor["nombre"]?></option>
                  <?php
                   }?>
                </select>
                <p><small>¿Autor no registrado? <a href="autores.php">Regístralo aquí</a></small></p>
            </div>
            
            <input type = "text" name = "titulo" class = "form-control" placeholder = "Título" required>
            <textarea name = "sinopsis" class = "form-control mt-3" placeholder = "Sinopsis" required></textarea>
            <input type = "text" name = "publicacion" class = "form-control mt-3" placeholder = "Año de publicación" required>
            <input type ="file" name = "image" class = "mt-3" required>
            <div class = "mt-3">
                <label for = "genero">Género literario</label>
                <select name = "genero" class = "form-control" id="genero" required>
                    <option value="">Seleciona un género</option>
                    <option value="1">Terror</option>
                    <option value="2">Fantasía</option>
                    <option value="3">Ciencia ficción</option>
                    <option value="4">Auto ayuda</option>
                    <option value="5">Poesía</option>
                    <option value="6">LGBT</option>
                    <option value="7">Romance</option>
                    <option value="8">Clásico</option>
                    <option value="9">Erótico</option>
                </select>
            </div>
            <input class = "btn btn-outline-dark btn-block mt-3" type = "submit" name = "registrar" value = "Registrar">
        </form>
        </div>
    </div>
</div>   
      <script>
        $(document).ready(function() {   
          $("#autor").select2();   
        });      
      </script>   
       <script>
        $(document).ready(function() {   
          $("#genero").select2();   
        });      
      </script>
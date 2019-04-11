<?php require_once ("includes/header.php");

    if (!isset($_GET["libro"]))
    {
        header('Location: http://localhost/ElBuenLector/');
    }
    
    $libro = $mysqli->query("SELECT l.nombre, l.publicacion, l.sinopsis, l.img, a.nombre AS autor 
                            FROM libro l JOIN autor a ON (l.id_autor = a.id_autor) 
                            WHERE l.id_libro = {$_GET['libro']}");
    $dato = $libro->fetch_assoc();

    $comentarios = $mysqli->query("SELECT u.nombre, u.apellidos, u.img, c.comentario
                                FROM usuario u JOIN comentario c ON (u.id_usuario = c.id_usuario)
                                WHERE c.id_libro = {$_GET['libro']}
                                ORDER BY c.id_comentario DESC");
    $estrellas = 4.3;
    $calificacion = 0;
?>
    <div class="container">
        <div class="row">
        <!-- imagen -->
            <div class="col-12 col-lg-6">
                <img src = "images/libros/<?=$dato["img"]?>">
            </div>
        <!-- datos del libro -->
            <div class="col-12 col-lg-6">
                <h1><?=ucwords($dato["nombre"])?></h1>
                <h2 class = "h5">De <?=ucwords($dato["autor"])?></h2>
                <!-- estrellas -->
                <div id="estrellas"></div>   

                <h2 class = "text-center mt-3 mb-3">Sinopsis</h2>
                <p class="text-justify"> 
                    <?=$dato["sinopsis"]?>
                 </p>
            </div>
            <div class="wd-100">
            </div>
            <?php if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"]))
            {
            ?>
             <div class="col-12 col-lg-6">
                <p class = "h5">¿Cómo lo calificas?<p>
                <div class ="" id="calificar"></div> 
            </div>
            <?php
            }
            ?>

            </div>
            <hr>
            <div class="w-100 mt-5">
            </div>
        <!-- comentario -->
            <?php if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"]))
            {
            ?>
            <form action="controller/comentario.php" method="post">
                <input type="hidden" name = "libro" value=<?=$_GET["libro"]?>>   
                <input type="hidden" name = "usuario" value =<?php  if (isset($_SESSION["usuario"])) echo $_SESSION["id_usuario"] ?>>
                <div class="row align-items-end">
                    <div class="col-11">
                        <textarea class="form-control" name= "comentario" placeholder="Escribe un comentario" required></textarea>
                    </div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-outline-dark login">Comentar</button>
                    </div>
                </div>
            </form>
            <?php
            }
            ?>

             <?php if (!isset($_SESSION["usuario"]) && empty($_SESSION["usuario"]))
             {
            ?>
            <div class="row">
               <div class="col">
                    <p class="text-center"><strong><a href="" data-toggle="modal" data-target="#sesion">Inicia sesión aquí</a> para poder comentar y calificar</strong></p>
                    <?php require_once ("includes/modal.php")?>     
                </div>
            </div>
        <?php
        }
        ?>
        <!-- comentarios -->
        <div class="w-100 mt-5"></div>
        <hr>
        <?php
        while ($comentario = $comentarios->fetch_assoc())
        {
        ?>
        <div class="row">           
            <div class="col-12 mb-3">
                <img src ="images/users/<?=$comentario["img"]?>" class="ProfilePicture img-circle mr-3">
                <p class = "comentario"><strong class="nombre"><?=ucwords($comentario["nombre"])." ".ucwords($comentario["apellidos"])?></strong> <?=$comentario["comentario"]?></p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
<?php require_once ("includes/footer.php")?> 
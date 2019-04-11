<?php require_once ("includes/header.php");

    if (!isset($_GET["libro"]))
    {
        header('Location: http://localhost/ElBuenLector/');
    }
    
    $libro = $mysqli->query("SELECT l.nombre, l.publicacion, l.sinopsis, l.img, a.nombre AS autor 
                            FROM libro l JOIN autor a ON (l.id_autor = a.id_autor) 
                            WHERE l.id_libro = {$_GET['libro']}");
    $dato = $libro->fetch_assoc();


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

        <?php if (!isset($_SESSION["usuario"]) && empty($_SESSION["usuario"]))
        {
        ?>
            <div class="row">
               <div class="col">
                    <p class="text-center"><strong><a href="" data-toggle="modal" data-target="#sesion">Inicia sesión aquí</a> para poder comentar</strong></p>
                    <?php require_once ("includes/modal.php")?>     
                </div>
            </div>
        <?php
        }
        ?>

        <?php
        for ($i = 1; $i <=5; $i++)
        {
        ?>
        <div class="row align-items-center">
            <div class="col-12 col-md-1 mt-3">
                <img src ="images/users/1.JPG" class="ProfilePicture img-circle">
            </div>
            <div class="col-12 col-md-11">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, voluptatem hic. Illo, quod debitis. Hic earum fugiat officia aspernatur veritatis commodi odio tempora rerum ipsam. Neque ullam autem ipsum placeat?</p>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
<?php require_once ("includes/footer.php")?> 
<?php require_once ("includes/header.php")?> 
<?php 
$estrellas = 4.3;
$calificacion = 0;
?>
    <div class="container">
        <div class="row">
            <!-- imagen -->
            <div class="col-12 col-lg-6">
                <img src = "images/Captura.JPG">
            </div>
            <!-- datos del libro -->
            <div class="col-12 col-lg-6">
                <h1>Fuego Y sangre</h1>
                <h2 class = "h5">De George R.R. Martin </h2>
                <!-- estrellas -->
                <div id="estrellas"></div>   

                <h2 class = "text-center mt-3 mb-3">Sinopsis</h2>
                <p class="text-justify"> 
                    Siglos antes de que tuvieran lugar los acontecimientos que se relatan en «Canción de hielo y fuego», la casa Targaryen, la única dinastía de señores dragón que sobrevivió a la Maldición de Valyria, se asentó en la isla de Rocadragón. Aquí tenemos el primero de los dos volúmenes en el que el autor de Juego de tronos nos cuenta, con todo lujo de detalles, la historia de tan fascinante familia: empezando por Aegon I Targaryen, creador del icónico Trono de Hierro, y seguido por el resto de las generaciones de Targaryens que lucharon con fiereza por conservar el poder, y el trono, hasta la llegada de la guerra civil que casi acaba con ellos. ¿Qué pasó realmente durante la Danza de dragones? ¿Por qué era tan peligroso acercarse a Valyria después de la Maldición? ¿Cómo era Poniente cuando los dragones dominaban los cielos? Estas, y otras muchas, son las preguntas a las que responde esta monumental crónica, narrada por un culto maestre de la Ciudadela, que anticipa el ya conocido universo de George R.R. Martin. Fuego y Sangre brindará a los lectores la oportunidad de tener otra visión de la fascinante historia de Poniente. Esta obra, magníficamente ilustrada con 80 láminas inéditas de Doug Wheatley, se convertirá, sin duda, en una lectura ineludible para todos los fans de la aclamada serie.
                 </p>
            </div>
            <div class="wd-100">
            </div>
            <div class="col-12 col-lg-6">
                <p class = "h5">¿Cómo lo calificas?<p>
                <div class ="" id="calificar"></div> 
            </div>

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
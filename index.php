<?php include ("includes/header.php")?>
    <div class="row">
        <div class="col">   
            <?php include ("includes/menu.php")?>
        </div> 
    </div> 
    
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Carrucel -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <!-- Imagen1 -->
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/b1.jpg" alt="First slide">
                        </div>
                        <!-- Imagen2 -->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/b2.jpg" alt="Second slide">
                        </div>
                        <!-- Imagen3 -->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/b3.jpg" alt="Third slide">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php include ("includes/footer.php")?>

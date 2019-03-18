<?php require_once ("includes/header.php")?>
     <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Resultados de Fuego y sangre</h2>
            </div>
        </div>

        <div class="row">
            <?php
            for ($i = 1; $i <=5; $i++)
            {
            ?>
                <div class="col-12 col-md-6 col-lg-4 mt-3">
                    <div class="card">          
                        <img src = "images/Captura.JPG" class="card-img-top img_libro">
                        <div class="card-body">
                            <h5 class="card-title">Fuego y sangre</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="libro.php" class="btn btn btn-outline-secondary btn-block">Ver libro </a>
                        </div>
                    </div>
                </div>  
            <?php
            }
            ?>
        </div>
    </div> 
    
<?php require_once ("includes/footer.php")?>
<?php require_once ("includes/header.php")?>

<?php 
    if (!isset($_GET["buscar"]))
    {   
        header('Location: http://localhost/ElBuenLector/');
    }
    if (isset($_GET["buscar"]))
    {
        $libros = $mysqli->query("SELECT l.id_libro, l.nombre, SUBSTRING(l.sinopsis, 1,100) AS sinopsis, l.img
                                FROM libro l JOIN autor a ON (l.id_autor = a.id_autor)
                                WHERE (a.nombre LIKE '%{$_GET["buscar"]}%' OR l.nombre LIKE '%{$_GET["buscar"]}%') OR  l.id_genero = '{$_GET["buscar"]}' OR a.id_autor = '{$_GET["buscar"]}' ");
    }

?>
     <div class="container">
        <div class="row">
            <?php
            while($libro = $libros->fetch_assoc())
            {
            ?>
                <div class="col-12 col-md-6 col-lg-4 mt-3">
                    <div class="card">          
                        <a href="libro.php?libro=<?=$libro["id_libro"]?>"><img src = "images/libros/<?=$libro["img"]?>" class="card-img-top img_libro"></a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><?=$libro["nombre"]?></h5>
                            <p class="card-text text-justify"><?=$libro["sinopsis"]?> ...</p>
                        </div>
                    </div>
                </div>  
            <?php
            }
            ?>
        </div>
    </div> 
    
<?php require_once ("includes/footer.php")?>
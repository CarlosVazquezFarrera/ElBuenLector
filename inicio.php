<?php require_once ("includes/header.php");
$randon = rand(1,50);
define('CANTIDAD_LIBROS', 20);
$myquery = "SELECT l.nombre, l.sinopsis, l.img, a.nombre AS autor, a.id_autor 
            FROM libro l JOIN autor a ON (l.id_autor = a.id_autor) 
            WHERE id_libro BETWEEN";

if ($randon < CANTIDAD_LIBROS)
{
    $fin = ($randon + CANTIDAD_LIBROS);
    $myquery .= " {$randon} AND {$fin}";
}
else
{
    $fin = ($randon - CANTIDAD_LIBROS);
    $myquery .= " {$fin} AND {$randon}";
}
echo $myquery;

?>
<div class="container">
    <h1 class="text-center descubre">Descubre algo nuevo</h1>
    <div class="row mt-4">
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-2">
                    <img class="img-fluid" src="images/libros/d.jpg">
                </div>
                <div class="col-10">
                    <h2>Juego y sangre</h2>
                    <h3 class=" h5 mt-1">de <a href = "libros.php?buscar=1">George R R Martin</a></h3>
                    <p class = "text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae adipisci inventore ex eos. Distinctio repellat nihil id dicta! Tenetur odit labore amet sunt laudantium iste exercitationem quibusdam vel obcaecati.</p>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php require_once ("includes/footer.php")?>
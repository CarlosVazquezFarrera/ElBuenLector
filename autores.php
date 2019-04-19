<?php require_once ("includes/header.php");
if (isset($_POST["registrar"]))
{
    if($mysqli->query("INSERT INTO autor (nombre) VALUES('{$_POST["nombre"]}')"))
    {
        header("Location:http://localhost/ElBuenLector/subir.php");
    }
}
?>


<div class="container">
    <form action="" method="post">
        <input type = "text" name = "nombre" placeholder = "Nombre del autor" class = "form-control" required>
        <input type = "submit" class  = "btn btn-outline-dark btn-block mt-4" name = "registrar" value = "Registrar">
    </form>
</div>
<?php require_once ("includes/footer.php")?>
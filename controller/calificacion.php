<?php
if (!isset($_GET["libro"]) || !isset($_GET["usuario"]) || !isset($_GET["calificacion"]))
{
    header('Location:http://localhost/ElBuenLector/');
}
require_once("../DB/conectar.php");
if(isset($_GET["insertar"]))
{
    if ($mysqli->query("INSERT INTO calificacion (id_libro, id_usuario, calificacion) VALUES ( {$_GET["libro"]}, {$_GET["usuario"]}, {$_GET["calificacion"]} )"))
    {
        echo '<script> 
            window.history.go(-1);
        </script>';
    }
}
if(isset($_GET["actualizar"]))
{
    if ($mysqli->query("UPDATE calificacion SET calificacion = {$_GET["calificacion"]} WHERE id_libro = {$_GET["libro"]} AND id_usuario = {$_GET["usuario"]}"))
    {
        echo '<script> 
            window.history.go(-1);
       </script>';
    }
}

?>
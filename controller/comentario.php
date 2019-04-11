<?php
if (!isset($_POST["comentario"]))
{
    header('Location: http://localhost/ElBuenLector/');
}
require_once("../DB/conectar.php");

if ($mysqli->query($myquery = "INSERT INTO comentario (id_usuario, id_libro, comentario) VALUES ('{$_POST["usuario"]}', '{$_POST["libro"]}', '{$_POST["comentario"]}') ") )
{
    echo '<script> 
    {
      window.history.go(-1);
    }
    </script>';
}
?>
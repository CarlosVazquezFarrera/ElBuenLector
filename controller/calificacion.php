<?php
if (!isset($_GET["libro"]) || !isset($_GET["usuario"]) || !isset($_GET["calificacion"]))
{
    header('Location:http://localhost/ElBuenLector/');
}
require_once("../DB/conectar.php");
$total_cal = $mysqli->query("SELECT COUNT(*) AS total FROM calificacion 
                            WHERE id_libro = {$_GET["libro"]} AND id_usuario = {$_GET["usuario"]}");
$total = $total_cal->fetch_assoc();

if ($total["total"] <= 0)
{
    if ($mysqli->query("INSERT INTO calificacion (id_libro, id_usuario, calificacion) VALUES ( {$_GET["libro"]}, {$_GET["usuario"]}, {$_GET["calificacion"]} )"))
    {
        echo "si. Insert";
    }
}
else
{
    if ($mysqli->query("UPDATE calificacion SET calificacion = {$_GET["calificacion"]} WHERE id_libro = {$_GET["libro"]} AND id_usuario = {$_GET["usuario"]}"))
    {
        echo "update";
    }

   
}
// {
//     echo '<script> 
//     {
//       window.history.go(-1);
//     }
//     </script>';
// }
?>
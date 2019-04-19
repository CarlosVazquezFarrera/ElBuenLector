<?php require_once ("includes/header.php");
if(isset($_POST["actualizar"]))
{
    if($_POST["nombre"])
    {
        if($mysqli->query("UPDATE usuario SET nombre = '{$_POST["nombre"]}' WHERE id_usuario = '{$_SESSION["id_usuario"]}'"))
        {
            $_SESSION["usuario"] = $_POST["nombre"];
        }
    }
    if($_POST["apellidos"])
    {
        if($mysqli->query("UPDATE usuario SET apellidos = '{$_POST["apellidos"]}' WHERE id_usuario = '{$_SESSION["id_usuario"]}'"))
        {
            $_SESSION["apellidos"] = $_POST["apellidos"];
        }
    }
    if($_POST["correo"])
    {   
        if($mysqli->query("UPDATE usuario SET correo = '{$_POST["correo"]}' WHERE id_usuario = '{$_SESSION["id_usuario"]}'"))
        {
            $_SESSION["correo"] = $_POST["correo"];
        }
    }
    if($_POST["password"])
    {
        echo $_POST["password"];
    }
    if (isset($_FILES["image"]) && !empty($_FILES["image"]["name"]))
    {
        $nombre = $_SESSION["id_usuario"].'.jpg';
        if(move_uploaded_file($_FILES["image"]["tmp_name"], "images/users/".$nombre ))
        {
            if($mysqli->query("UPDATE usuario SET img = '{$nombre}' WHERE id_usuario = '{$_SESSION["id_usuario"]}'"))
            {
                $_SESSION["img"] = $nombre;
            }
        }
    }
    header("Location:http://localhost/ElBuenLector/perfil.php");
}
?>
<div class="container">
<div class="">
    <div class="col-12">
        <form action="perfil.php" method="post" enctype = multipart/form-data>          
            <img class = "offset-4 ProfilePicture img-circle mr-3 perfil" src = "images/users/<?=$_SESSION["img"]?>" >         
            <input type = "text" name = "nombre" class = "form-control  mt-3" placeholder = "Nombre" value = "<?=ucwords($_SESSION["usuario"])?>"> 
            <input type = "text" name = "apellidos" class = "form-control  mt-3" placeholder = "Apellidos" value = "<?=ucwords($_SESSION["apellidos"])?>">
            <input type = "email" name = "correo" class = "form-control  mt-3" placeholder = "Correo" value = "<?=$_SESSION["correo"]?>">
            <input type = "password" name = "password" class = "form-control  my-3" placeholder = "Actualizar contraseña">
            <input type = "password2" name = "password" class = "form-control  my-3" placeholder = "Confirmar cambio de contraseña">
            <div>
                <label for = "image">Actualizar foto de perfil</label>
                <br>
                <input type = "file" name = "image">
            </div>
            <input type = "submit"  name = "actualizar" class = "btn btn-block btn-outline-dark mt-3" value = "actualizar">
        </form>
    </div>
</div>
</div>
<?php require_once ("includes/footer.php")?> 
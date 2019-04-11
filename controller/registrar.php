<?php 
    $errores = 0;
    $alerta = "";
    $txt_error = "";
    if (isset($_POST["registrar"]))
    {
        // Validaciones de datos
        if ($correos = $mysqli->query("SELECT COUNT(correo) AS cantidad FROM usuario WHERE correo = '{$_POST["correo"]}' LIMIT 1"))
        {
            $cantidad_correo = $correos->fetch_assoc();
            if ($cantidad_correo["cantidad"] >= 1)
            {
                $errores++;
                $alerta = "danger";
                $txt_error .= "Correo no disponible, por favor introduzca otro. <br>";
            }

        }
        if(is_numeric($_POST["nombre"]) || preg_match("/[0-9]/",$_POST["nombre"]))
        {
            $txt_error .= "El nombre no debe contener números. <br>";
            $alerta = "danger";
            $errores++;
        }
        if (strlen($_POST["nombre"]) < 3)
        {
            $txt_error .= "El nombre debe tener por lo menos una longitud de 3 caractéres. <br>";
            $alerta = "danger";
            $errores++;
        }
        if(is_numeric($_POST["apellidos"]) || preg_match("/[0-9]/",$_POST["apellidos"]))
        {
            $txt_error .= "Los apellidos no debe contener números. <br>";
            $alerta = "danger";
            $errores++;
        }
        if (strlen($_POST["apellidos"]) < 3)
        {
            $txt_error .= "Los apellidos debe tener por lo menos una longitud de 3 caractéres. <br>";
            $alerta = "danger";
            $errores++;
        }
        if (!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL))
        {
            $txt_error .= "Debes ingresar una dirección de correo válida. <br>";
            $alerta = "danger";
            $errores++;
        }
        if (strcmp($_POST["password"],$_POST["passwordConfirmar"]) !== 0)
        {
            $errores++;
            $alerta = "danger";
            $txt_error .= "Las contraseñas no coinciden. <br>";
        }
        if (strlen($_POST["password"]) < 5)
        {
            $txt_error .= "Las contraseñas debe tener por lo menos una longitud de 5 caractéres. <br>";
            $alerta = "danger";
            $errores++;
        }
        if ($errores == 0)
        {
            $myQuey = "INSERT INTO usuario (nombre, apellidos, correo, password) VALUES ('{$_POST["nombre"]}', '{$_POST["apellidos"]}','{$_POST["correo"]}', '".MD5($_POST["password"])."')";
            if ($mysqli->query($myQuey))
            {
                if (enviarEmail($_POST["correo"]))
                {
                    header('Location: http://localhost/ElBuenLector/ok.php');
                }
            }
        }

    }
    if (isset($_POST["iniciar"]))
    {
        $user = $mysqli->query("SELECT * FROM usuario WHERE correo = '{$_POST["correoLogin"]}' AND password = '".md5($_POST["contraseña"])."'  " );
        $datos = $user->fetch_assoc();

        if (strcmp($datos["correo"], $_POST["correoLogin"]) !==0 || strcmp($datos["password"], md5($_POST["contraseña"])) !==0)
        {
            echo '<script> 
            {
              alert("Usuario o contraseña incorrectos");
              window.history.go(-1);
            }
            </script>';
        }
        else
        {
            $_SESSION["id_usuario"] = $datos["id_usuario"];
            $_SESSION["usuario"] = $datos["nombre"];
            $_SESSION["correo"] = $datos["nombre"];
            $_SESSION["img"] = $datos["img"];
            echo '<script> 
            {
              window.history.go(-1);
            }
            </script>';
            //header('Location: http://localhost/ElBuenLector/');
        }
    }
?>
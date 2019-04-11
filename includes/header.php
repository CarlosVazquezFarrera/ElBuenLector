<?php session_start();
    require_once("DB/conectar.php");
    if (isset($_GET["session"]) && $_GET["session"] == "logout")
    {
        session_destroy();
        echo "
            location.reload();
        ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/jquery.rateyo.min.css"/>
    <link rel="stylesheet" href="css/estilos.css">    
    <title>El Buen Lector</title>
</head>
<body>
    <div class="container-fluid">
<?php require_once ("includes/menu.php")?>
        
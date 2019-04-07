<?php require_once ("includes/header.php")?>
<?php require_once("function/funciones.php")?>
<?php require_once("controller/registrar.php")?>

    <div class="container">
        <div class="row align-items-end">
        <!--Alerta-->
        <?php if ($errores > 0)
        {
        ?>
            <div class="col-12">
                <div class="alert alert-<?=$alerta?> alert-dismissible fade show" role="alert">
                    <strong>¡Revise los datos ingresados!</strong> 
                    <hr>
                    <?=$txt_error?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        <?php
        }
        ?>
            <div class="col-md-12 col-lg-6 ">
                <p class = "h5 text-justify">Aquí podrás compartir tu opinión con aquellas personas que tengan gustos literarios similares al tuyo.</p>
                <img src="images/libros.png" width = 100%>
            </div>

            <div class="col-md-12 col-lg-6">
                <h1 class="text-center">Abre una cuenta</h1>
                <form method="POST" action ="index.php">
                    <div class="row">
                        <div class="col-6">
                            <input type = "text" name="nombre" placeholder = "Nombre"  class="form-control" <?php showValue("nombre")?>  required>
                        </div>
                        <div class="col-6">
                            <input type = "text" name="apellidos" placeholder = "Apellidos" class="form-control" <?php showValue("apellidos")?>  required>
                        </div>
                        <div class="col-12 mt-2">
                            <input type = "email" name="correo" placeholder = "Correo electrónico" class="form-control" <?php showValue("correo")?> required>
                        </div>
                        <div class="col-12 mt-2">
                            <input type = "password" name ="password" placeholder = "Contraseña" class="form-control" required>
                        </div>
                        <div class="col-12 mt-2">
                            <input type = "password" name ="passwordConfirmar" placeholder = "Repite tu contraseña" class="form-control" required>
                        </div>
                        
                        
                        <div class="col-12 mt-2">
                            <small class = "text-justify">Al hacer clic en "Registrarte", acepta nuestras Condiciones, la Política de datos y la Política de cookies.</small>
                        </div>
                        <div class="col-12 mt-2">
                            <p class = "text-center">¿Ya tienes cuenta? <a href="" data-toggle="modal" data-target="#sesion">Inicia sesión aquí</a></p>
                        </div>
                        <div class="col-12 mt-2">                    
                            <input type = "submit" name="registrar" value = "Registrarse" class = "btn btn-outline-dark btn-block login">
                        </div>
                    </div>
                </form>
            </div>
            <?php require_once ("includes/modal.php")?> 
        </div>
    </div> 
<?php require_once ("includes/footer.php")?>

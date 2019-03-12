<?php require_once ("includes/header.php")?> 
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-12 col-lg-6 ">
                <p class = "h5 text-justify">Aquí podrás compartir tu opinión con aquellas personas que tengan gustos literarios similares al tuyo.</p>
                <img src="images/libros.png" width = 100%>
            </div>

            <div class="col-md-12 col-lg-6">
                <h1 class="text-center">Abre una cuenta</h1>
                <form method="POST" action ="">
                    <div class="row">
                        <div class="col-6">
                            <input type = "text" placeholder = "Nombre" class="form-control" required>
                        </div>
                        <div class="col-6">
                            <input type = "text" placeholder = "Apellidos" class="form-control" required>
                        </div>
                        <div class="col-12 mt-2">
                            <input type = "email" placeholder = "Correo electrónico" class="form-control" required>
                        </div>
                        <div class="col-12 mt-2">
                            <input type = "password" placeholder = "Contraseña" class="form-control" required>
                        </div>
                        <div class="col-12 mt-2">
                            <input type = "password" placeholder = "Repite tu contraseña" class="form-control" required>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="radio" name="options"  checked value = "Hombre"> Hobre
                            <input type="radio" name="options"  value = "Mujer"> Mujer
                        </div>
                        <div class="col-12 mt-2">
                            <label class= "h6">Fecha de nacimiento</label>
                            <div class="row">
                                <div class="col-4">
                                    <select class="custom-select">
                                        <option value="">Dia</option>
                                        <?php
                                        for ($i = 1; $i <= 31; $i++)
                                        {
                                        ?>
                                            <option value=<?=$i?>> <?=$i?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="custom-select">
                                        <option value="">Mes</option>
                                        <?php
                                        for ($i = 1; $i <= 12; $i++)
                                        {
                                        ?>
                                            <option value=<?=$i?>> <?=$i?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="custom-select">
                                        <option value="">Año</option>
                                        <?php
                                        $year = date("Y");
                                        for ($i = $year - 18; $i >= $year - 109; $i--)
                                        {
                                        ?>
                                            <option value=<?=$i?>> <?=$i?> </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <small class = "text-justify">Al hacer clic en "Registrarte", acepta nuestras Condiciones, la Política de datos y la Política de cookies.</small>
                        </div>
                        <div class="col-12 mt-2">
                            <p class = "text-center">¿Ya tienes cuenta? <a href = "inicio.php">Inicia sesión aquí</a></p>
                        </div>
                        <div class="col-12 mt-2">                    
                            <input type = "submit" value = "Registrarse" class = "btn btn-outline-dark btn-block login">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div> 
    <hr>
    <p class = "text-center">ElBuenLector &copy; <?= date("Y");?></p>
<?php require_once ("includes/footer.php")?>

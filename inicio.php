<?php require_once ("includes/header.php")?> 
<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4 ">
            <form action="" method="post" class = "form-login">
                <!-- <p class = "mt-3 h4">Iniciar sesión</p> -->
                
                <div class = "d-none d-md-block offset-md-3">
                    <img src ="images/ico.png" width = "150px">
                </div>
                

                <!-- <div class="input-group mt-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><img src ="images/user.png" width = "20px"></span>
                    </div> -->
                    <label for="" class = "mt-5">Email</label>
                    <input type = "email" placeholder = "Email" class="form-control" required>
                <!-- </div>     -->
                
                
                <!-- <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><img src ="images/pass.png" width = "20px"></span>
                    </div> -->
                    <label for="" class = "mt-4">Contraseña</label>
                    <input type = "password" placeholder = "***********" class="form-control" required>
                <!-- </div>  -->
                    <p class = "text-center mt-4">¿No tienes cuenta? <a href = "index.php">regístrate aquí</a></p>
                <input type = "submit" value = "Iniciar sesión" class="form-control mt-4 login">
            </form>
        </div>
    </div>
</div>
    <hr>
    <p class = "text-center">ElBuenLector &copy; <?= date("Y");?></p>
<?php require_once ("includes/footer.php")?>
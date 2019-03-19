<?php require_once ("includes/header.php")?> 
<div class="container">
    <div class="modal-dialog text-center">
        <div class="col-sm-9 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src = "images/face.png">
                </div>
                <div class="col-12 form-input">
                    <form action="" method="post">
                        <div class="form-group mt-3">
                            <input type = "email" placeholder = "Correo electrónico" class="form-control" required>
                        </div>
                        <div class="form-group my-3">
                            <input type = "password" placeholder = "Contraseña" class="form-control" required>
                        </div>
                        <input type = "submit" value = "Registrarse" class = "btn btn-outline-dark btn-block mb-5 inicio">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <hr>
    <p class = "text-center">ElBuenLector &copy; <?= date("Y");?></p>
<?php require_once ("includes/footer.php")?>
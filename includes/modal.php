
<div class="modal fade" id="sesion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
        <form method="POST" action ="index.php" class = "sesion">
            <div class="row py-5 px-5 text-center">
                <div class="col-12 user-img my-5">
                    <img src = "images/face.png">
                </div>
                <div class="col-12 mt-5">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                    <input name="correoLogin" type="email" class="form-control" placeholder="Email" required>
                </div>
                </div>
                <div class="col-12 mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><img src="images/password.png" width="17px"></div>
                    </div>
                    <input type="password" name = "contraseña" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="col-12 mt-4">                    
                    <input type = "submit" name = "iniciar" value = "Iniciar Sesión" class = "btn btn-outline-dark btn-block login">
                 </div>
            </div>
        </form>
        </div>
    </div>
  </div>
</div>
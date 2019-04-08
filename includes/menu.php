<nav class="navbar navbar-expand-lg navbar-light buscador">
  <a class="navbar-brand text-lector" style="color: black";>ElBuenLector</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="generos.php">Géneros</a>
      </li>
      <?php if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"]))
      {
      ?>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?=$_SESSION["usuario"]?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php?session=logout">Cerrar Sesión</a>
        </div>
      </li>
      <?php
      }
      ?>
    </ul>
    <form class="form-inline my-2 my-lg-0" action = "libros.php" method = "POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" required>
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><img src="images/buscar.png"></button>
    </form>
  </div>

</nav>
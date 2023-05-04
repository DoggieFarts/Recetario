<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <!--Metadatos-->
  <meta charset="UTF-8">
  <meta name="author" content="Team: Ultimate">
  <meta name="description" content="Página web de recetas">
  <meta name="keywords" content="HTML, CSS, JavaScript, ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Titulo-->
  <title>Mi Recetario</title>
  <!--Favicon - icono de la pestaña-->
  <link rel="icon" type="image/x-icon" href="images/cocinero.png">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- CDN Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!--My CSS-->
  <link href="style.css" rel="stylesheet">
  <link href="style2.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="js/Filter.css">
  <link rel="stylesheet" href="js/Bootstrap-Tags-Input-bootstrap-tagsinput.css">

</head>

<body>
  <!--Barra de Navegación-->
  <nav class="navbar navbar-expand-md navbar-light sticky-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbar-toggler">
        <a class="navbar-brand" href="index.php">
          <img src="images/cocina.png" width="50" alt="Logo de la página web">
        </a>

        <form class="d-flex" role="search" method="POST" action="resultadoBusqueda.php">
          <input name="barrbus" class="form-control me-1" type="text" placeholder="Buscar" aria-label="Search" size="40">
          <a href="#myModal" data-bs-toggle="modal"><img src="images/buscar.png" width="30" alt="buscador">
          </a>
          <!--<button class="btn btn-outline-success" type="submit">Buscar</button>-->
        </form>

        <ul class="navbar-nav d-flex justify-content-center align-items-center">

          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle btn-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="images/recetario.svg" width="27" alt="mi recetario">
              Mi Recetario
            </button>
            <ul class="dropdown-menu me-2 dropdown-menu-info">
              <li><a class="dropdown-item active" href="MisRecetas.php">Mis Recetas</a></li>
              <li><a class="dropdown-item" href="Crear_receta.php">Crear Receta</a></li>
              <li><a class="dropdown-item" href="#">Something</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item " href="#">Invitar</a></li>
            </ul>
          </div>

          <button type="button" class="btn btn-light btn-2">
            <img src="images/carrito-de-supermercado.png" width="27" alt="carrito de compras">
            Comprar
          </button>


          <div class="dropdown">
            <button class="btn btn-light dropdown-toggle btn-3" type="button" data-bs-toggle="dropdown" aria-expanded="true">
              <img src="images/user.png" width="27" alt="carrito de compras">
              <?php
              include "php/session.php"
              ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-info">
              <li><a class="dropdown-item" href="#">Configuración</a></li>
              <li><a class="dropdown-item" href="#">Preferencias </a></li>
              <li>
                <form method="post" action="login.php"><button type="submit" name="cerrars"> <a class="dropdown-item">Cerrar sesión</a>
                  </button>
                </form>
              </li>
            </ul>
          </div>

        </ul>
      </div>
    </div>
  </nav>



  <!--Sección Hero -> (Sección principal) -->

  <section class="principal">
    <h1> Crear Receta </h1>
    <br>
    <div class="container-new">

      <!-- Img del platillo -->
      <div class="wrapper">

        <div class="image">
          <img id="imgPreview" src="" alt="">

          <!-- intento de previzualizar img de la receta -->

        </div>

        <div class="content">

          <div class="icon">
            <i class="fas fa-cloud-upload-alt"></i>
          </div>
          <div class="text">
            Ningún archivo elegido, todavía!
          </div>

        </div>

        <!-- Boton -->
        <div id="cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <!--<div class="file-name">
        Nombre de archivo aquí
      </div>-->
      </div>
      <!-- parte de visualiación de la img -->



      <button onclick="defaultBtnActive()" id="custom-btn">
        Selecciona la img de tu platillo
      </button>
    </div>
  </section>
  <br>
  <br>


  <!--Otra parte -->
  <form method="post" enctype="multipart/form-data">
    <section>
      <input id="default-btn" hidden type="file" name="imagens" onchange="previewImage(event, '#imgPreview')">
      <div class="container">

        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Nombre de la receta</label>
          <input type="text" name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Escriba el nombre de su receta">
        </div>

        <div class="row g-3">
          <div class="col">
            <label for="form-select" class="form-label">Tipo Alimentacion</label>
            <select name="talimentacion" class="form-select" aria-label="Default select example" id="form-select">
              <option>Omnívora</option>
              <option>Vegana</option>
              <option>Vegeteriana</option>
            </select>
          </div>
          <div class="col">
            <label for="form-select" class="form-label">Categoria</label>
            <select name="categoria" class="form-select" aria-label="Default select example" id="form-select">
              <option>Dulce</option>
              <option>Salado</option>
            </select>
          </div>
        </div>
      </div>
    </section>

    <!--Otra parte -->
    <br>
    <section>
      <div class="container">
        <div class="row g-3">
          <div class="col">
            <label for="input_time" class="form-label">Region</label>
            <input type="text" name="region" class="form-control" placeholder="Region" aria-label="First name" id="input_time">
          </div>
          <div class="col">
            <label for="input_porciones" class="form-label">Rendimiento</label>
            <input type="text" class="form-control" name="porciones" placeholder="porciones" aria-label="Last name" id="input_porciones">
          </div>
        </div>
      </div>
    </section>

    <!-- Ingredientes -->
    <br>
    <br>
    <section class="centrado">
      <div class="container3">

        <div class="wrap">
          <h2>Ingredientes</h2>
          <a href="#" class="add">
            &plus;
          </a>
        </div>

        <div class="inp-ggroup">

        </div>
      </div>
    </section>

    <!-- Crear pasos de la receta -->
    <br>
    <br>
    <section class="centrado">
      <div class="container4">

        <div class="wrap2">
          <h2>Pasos para su elaboración</h2>
          <a href="#" class="add2">
            &plus;
          </a>
        </div>

        <div class="inp-ggroup2">

        </div>
      </div>
    </section>

    <!-- Crear pasos de la receta -->

    <br>
    <br>
    <section>
      <div class="container">
        <div class="d-grid gap-2">
          <button class="btn btn-success" type="submit">Guardar</button>
        </div>
      </div>
    </section>
    <?php
    include "php/cargarReceta.php";
    ?>
  </form>

  <br>
  <br>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <!-- My script -->
  <script src="js/create_receta.js"></script>
</body>

<!--footer-->
<footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <!-- LOGO -->
      <a href="#" class="col-3 text-reser text-uppercase d-flex align-items-center">
        <img src="images/cocina.png" width="75" alt="Logo de la página web" class="img-logo mr-2">
        Recetario
      </a>
      <!-- MENÚ -->
      <ul class="col-3 list-unstyled">
        <li class="font-weight-bold text-uppercase">
          Redes sociales
        </li>
        <li class="d-flex justify-content-between">
          <a href="#" class="text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>

          <a href="#" class="text-reset">
            <i class="fa-brands fa-whatsapp"></i>
          </a>

          <a href="#" class="text-reset">
            <i class="fa-brands fa-square-twitter"></i>
          </a>

          <a href="#" class="text-reset">
            <i class="fa-brands fa-pinterest"></i>
          </a>
        </li>
      </ul>
      <!-- Social networks -->
    </div>
  </div>
</footer>

<script src="js/Bootstrap-Tags-Input-bootstrap-tagsinput-custom.js"></script>
<script src="js/Bootstrap-Tags-Input-bootstrap-tagsinput.min.js"></script>

</html>
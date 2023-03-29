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

  <!--My CSS-->
  <link href="login.css" rel="stylesheet">

</head>

<body>


<section>

  <div class="form-box">
    <div class="form-value">
      <form method="post">
        <h2>Registro de usuario</h2>
        <div class="inputbox">
          <input type="text" required name="name">
          <label for="">Nombre</label>
        </div>
        <div class="inputbox">
          <input type="text" required name="ApellidoP">
          <label for="">Apellido Paterno</label>
        </div>
        <div class="inputbox">
          <input type="text" required name="ApellidoM">
          <label for="">Apellido Materno</label>
        </div>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" required name="correo">
          <label for="">Correo Electrónico </label>
        </div>

        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" required name="contraseña">
          <label for="">Contraseña</label>
        </div>

        <button type="submit">
          Registrar
        </button>
        <?php
          // echo'<p>antes</p>';
          include "./php/registro.php";
        ?>
      </form>

    </div>
  </div>
</section>

<!-- Pagina para iconos -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
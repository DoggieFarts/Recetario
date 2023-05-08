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
        <h2>Inicio de Sesión</h2>

        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="email" required name="correo">
          <label for="">Correo Electrónico </label>
        </div>

        <div class="inputbox">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" required name="password">
          <label for="">Contraseña</label>
        </div>

        <div class="forget">
          <label for=""><input type="checkbox">Recordarme</label>
          <a href="#">Olvide Contraseña</a>
        </div>

        <button type="submit">
          Iniciar sesión
        </button>
        <div class="register">
          <p>No tengo una cuenta <a href="singn-in.php">Registrar</a> </p>
        </div>
        <?php
          // echo'<p>antes</p>';
          include "./php/log.php";
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
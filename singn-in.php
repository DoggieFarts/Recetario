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
  <link href="register.css" rel="stylesheet">

</head>

<body>


<div class="box">
  <span class="borderLine"></span>
  <form method="post" autocomplete="off" >
    <h2>Registro de usuario</h2>
    <div class="inputBox">
      <input type="text" required="required" name="name">
      <span>Nombre</span>
      <i></i>
    </div>

    <div class="inputBox">
      <input type="text" required="required" name="ApellidoP">
      <span>Apellido paterno</span>
      <i></i>
    </div>

    <div class="inputBox">
      <input type="text" required="required" name="ApellidoM">
      <span>Apellido materno</span>
      <i></i>
    </div>

    <div class="inputBox">
      <input type="email" required="required" name="correo" autocomplete="off" >
      <span>Correo electrónico</span>
      <i></i>
    </div>

    <div class="inputBox">
      <input type="password" required="required" name="contraseña">
      <span>Contraseña</span>
      <i></i>
    </div>
    <div class="links">
      <a href="login.php">¿Iniciar sesión?</a>

    </div>
    <input name="mandar" type="submit">
    <?php
    // echo'<p>antes</p>';
<<<<<<< HEAD
    //echo"registro";
=======
>>>>>>> Axel
    include "./php/registro.php";
    ?>
  </form>
</div>
<div class="clearfix"></div>



<!-- Pagina para iconos -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
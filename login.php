<!DOCTYPE html>
<html>

<head>
  <!--Metadatos-->
  <meta charset="UTF-8">
  <meta name="ARCM y AT" content="Team: Ultimate">
  <meta name="description" content="Recetario Ultimate">
  <meta name="keywords" content="HTML, CSS, JavaScript, ">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Titulo-->
  <title>Iniciar sesión</title>
  <!--Favicon - icono de la pestaña-->
  <link rel="icon" type="image/x-icon" href="images/cocinero.png">
  <!--My CSS-->
  <link href="login.css" rel="stylesheet">
  <!--Bootstrap-->

  <!-- Google Font Link Icons-->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>


<body>

  <div class="seccion-derecha">
    <img src="images/cocinero.png" class="img-thumbnail" alt="...">

  </div>

  <div class="box">
    <span class="borderLine"></span>
    <form method="post" action="php/log.php">
      <h2>Inicia sesión</h2>
      <div class="inputBox">
        <input type="text" name="correo" required="required">
        <span>Usuario</span>
        <i></i>
      </div>

      <div class="inputBox">
        <input type="password" name="password" required="required">
        <span>Contraseña</span>
        <i></i>
      </div>
      <div class="links">
        <a href="#">¿Has olvidado tu contraseña?</a>
        <a href="singn-in.php">Regístrarse</a>
      </div>
      <input type="submit" value="Inicia sesión">

    </form>
  </div>
  <div class="clearfix"></div>
</body>

</html>
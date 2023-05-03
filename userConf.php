<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <!--Metadatos-->
    <meta charset="UTF-8">
    <meta name="author" content="Team: Ultimate">
    <meta name="description" content="Página web de recetas">
    <meta name="keywords" content="HTML, CSS, JavaScript, ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Titulo-->
    <title>Visualizar Receta</title>
    <!--Favicon - icono de la pestaña-->
    <link rel="icon" type="image/x-icon" href="images/cocinero.png">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!--My CSS-->
    <link href="style.css" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="js/Filter.css">
    <link rel="stylesheet" href="js/Bootstrap-Tags-Input-bootstrap-tagsinput.css">


</head>
<body>
<!--Barra de Navegación-->
<nav class="navbar navbar-expand-md navbar-light sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-toggler">
            <a class="navbar-brand" href="index.php">
                <img src="images/cocina.png" width="50" alt="Logo de la página web">
            </a>

            <form class="d-flex" role="search" method="POST" action="resultadoBusqueda.php">
                <input name="barrbus"class="form-control me-1" type="text" placeholder="Buscar" aria-label="Search" size="40">
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
                    <button class="btn btn-light dropdown-toggle btn-3" type="button" data-bs-toggle="dropdown"
                            aria-expanded="true">
                        <img src="images/user.png" width="27" alt="carrito de compras">
                        <?php
                        include "./php/session.php"
                        ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-info">
                        <li><a class="dropdown-item" href="userConf.php">Configuración</a></li>
                        <li><a class="dropdown-item" href="login.php">Cerrar sesión</a></li>
                    </ul>
                </div>

            </ul>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm">
               <hr>
                <!-- Drop Izquierda -->
                <div class="btn-group dropright">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Grupos
                    </button>
                    <div class="dropdown-menu">
                        <!-- Dropdown menu links -->
                        <a class="dropdown-item" href="#">Crear grupo</a> <!-- Aqui crear un modal con los datos del grupo -->
                        <!-- Agregar PHP aqui cuando x persona pertenezca a grupo o haya creado un grupo agregar opciones -->
                        <a class="dropdown-item" href="#">Observar grupo</a>
                    </div>
                </div>
<br>
                <br>

                <div class="btn-group dropright">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alergias
                    </button>
                    <div class="dropdown-menu">
                        <!-- Dropdown menu links -->
                        <a class="dropdown-item" href="#">Agregar alergias</a> <!-- Aqui crear un modal con los datos de las alergias -->
                        <a class="dropdown-item" href="#">Observar alergias</a>
                        <a class="dropdown-item" href="#">Remover alergias</a>
                    </div>
                </div>
                <br>


            </div>
            <div class="col-sm">
               <hr>
                <h4>Configuración de cuenta</h4>

                    <form>

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name"  placeholder="Nombre de usuario">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellido</label>
                            <input type="text" class="form-control" id="lastname"  placeholder="Apellido de usuario">
                        </div>

                        <div class="form-group">
                            <label for="Password">Contraseña</label>
                            <input type="password" class="form-control" id="Password" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="PasswordValidation">Confirmación</label>
                            <input type="password" class="form-control" id="PasswordValidation" placeholder="Confirmación">
                        </div>
                        <hr>
                        <h4>Compartir con redes sociales</h4>
                        <ul class="col-3 list-unstyled">

                            <li class="d-flex justify-content-between">
                                <a href="https://facebook.com" class="text-reset">
                                    <i class="fab fa-facebook-f fa-3x icons"></i>
                                </a>

                                <a href="whatsapp://send?text=Prueba la nueva aplicación de recetario!" class="text-reset" data-action="share/whatsapp/share">
                                    <i class="fa-brands fa-whatsapp fa-3x icons"></i>
                                </a>

                                <a href="https://twitter.com" class="text-reset">
                                    <i class="fa-brands fa-square-twitter fa-3x icons"></i>
                                </a>

                                <a href="https://pinterest.com" class="text-reset">
                                    <i class="fa-brands fa-pinterest fa-3x icons"></i>
                                </a>
                            </li>
                        </ul>

                        <button type="submit" class="btn btn-warning">Guardar cambios</button>
                    </form>


            </div>

        </div>


    </div>

</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
</script>
</body>

<div class="modal fade" role="dialog" tabindex="-1" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Filtros de búsqueda</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="filter">
                    <form method="POST" action="resultadoBusqueda.php">
                        <label for="platillo">Platillo específico</label><br>
                        <input id="platillo" placeholder="Platillo específico"></input>
                        <br>
                        <select>
                            <option value="" selected disabled>Tipo de comida</option>
                            <option value="vegana" >Vegana</option>
                            <option value="vegetariana" >Vegetariana</option>
                            <option value="carnivora" >Carnívora</option>
                            <option value="sinfiltro">Sin preferencia</option>
                        </select>
                        <br>
                        <label for="ingredientes">Ingredientes</label>

                        <input type="text" id="ingredientes" data-role="tagsinput" data-class="label-info" placeholder="Ingredientes" />

                        <label for="ingredientesN">Ingredientes no deseados</label>
                        <input type="text" id="ingredientesN" data-role="tagsinput" data-class="label-info" placeholder="Ingredientes no deseados" />
                        <br>
                        <div>
                            <button class="btn btn-primary" type="buttom" data-bs-dismiss="modal">Cerrar</button>
                            <button class="btn btn-primary" type="submit">Buscar</button>
                        </div>


                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <p>Ultimate&nbsp;<span style="color: rgb(32, 33, 36);">® GRACIAS A DIOS Q ES VIERNES</span></p>
            </div>
        </div>
    </div>
</div>
<script src="js/Bootstrap-Tags-Input-bootstrap-tagsinput-custom.js"></script>
<script src="js/Bootstrap-Tags-Input-bootstrap-tagsinput.min.js"></script>

</html>


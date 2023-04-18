<?php
session_start();
//Axel Cambio
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-toggler">
            <a class="navbar-brand" href="#">
                <img src="images/cocina.png" width="50" alt="Logo de la página web">
            </a>

            <form class="d-flex" role="search">
                <input class="form-control me-1" type="search" placeholder="Buscar" aria-label="Search" size="40">
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
                        <li><a class="dropdown-item active" href="#">Mis Recetas</a></li>
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
                        <li><a class="dropdown-item" href="#">Configuración</a></li>
                        <li><a class="dropdown-item" href="#">Preferencias </a></li>
                        <li><a class="dropdown-item" href="login.php">Cerrar sesión</a></li>
                    </ul>
                </div>

            </ul>
        </div>
    </div>
</nav>
<div class="container">
<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action"> <img src="images/desayuno.jpg" alt="..." class="img-thumbnail float-left" style="width: 15vw; alignment: left ">WEBOS XDD <br>Categoría:<br>Region:<br>Tipo de alimentacion:</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary"> <img src="images/desayuno.jpg" alt="..." class="img-thumbnail float-left" style="width: 15vw; alignment: left ">A simple primary list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"> <img src="images/desayuno.jpg" alt="..." class="img-thumbnail float-left" style="width: 15vw; alignment: left ">A simple secondary list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-success"> <img src="images/desayuno.jpg" alt="..." class="img-thumbnail float-left" style="width: 15vw; alignment: left ">A simple success list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-danger"> <img src="images/desayuno.jpg" alt="..." class="img-thumbnail float-left" style="width: 15vw; alignment: left ">A simple danger list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-warning"> <img src="images/desayuno.jpg" alt="..." class="img-thumbnail float-left" style="width: 15vw; alignment: left ">A simple warning list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info"> <img src="images/desayuno.jpg" alt="..." class="img-thumbnail float-left" style="width: 15vw; alignment: left ">A simple info list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-light"> <img src="images/desayuno.jpg" alt="..." class="img-thumbnail float-left" style="width: 15vw; alignment: left ">A simple light list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-dark"> <img src="images/desayuno.jpg" alt="..." class="img-thumbnail float-left" style="width: 15vw; alignment: left ">A simple dark list group item</a>
    <!-- Esta lista puede irse agregando automaticamente con un ciclo en php (por lo que solo ocuparias una linea de codigo html xdxd)---->
</div>
</div>


</body>

<!--Modal de busqueda-->
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
                            <a href="resultadoBusqueda.php">
                                <button class="btn btn-primary" type="submit">Buscar</button>
                            </a>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous">
</script>

<!--footer-->
<div class=" fixed-bottom">
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <!-- LOGO -->
                <a href="index.php" class="col-3 text-reser text-uppercase d-flex align-items-center">
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
</div>
<script src="js/Bootstrap-Tags-Input-bootstrap-tagsinput-custom.js"></script>
<script src="js/Bootstrap-Tags-Input-bootstrap-tagsinput.min.js"></script>
</html>
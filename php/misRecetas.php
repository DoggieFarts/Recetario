<?php
require "./php/conexion.php";
//echo"sin id";
$creador = $_SESSION['ID'];
$sql1 = "SELECT * FROM `recetas` WHERE creador='$creador'";
$res = $con->query($sql1);
//echo"antes del primer if";
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo'
    <div class="col">
        <div class="card ">
            <img src="'.$row["imagen"].'" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">'.$row["nombre"].'</h5>
                <p class="card-text">'.$row["tipoAlimentacion"].'</p>
                <p class="card-text">'.$row["Categoria"].'</p>
                <p class="card-text">'.$row["Region"].'</p>
                <div class="d-grid gap-1 col-5 mx-auto">
                <a href="VerReceta.php?id='.$row["idrecetas"].'">
                    <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: .50rem; --bs-btn-font-size: .9rem;">
                        <img src="images/vision.png" class="image_see" width="27" alt="ojo de visualizar">
                        Vizualizar Receta
                    </button>
                </a>
                </div>
            </div>
        </div>
    </div>';
    }
} else {
    echo"<br><p style='color: rgb(136, 1, 1);'>No cuenta con recetas cargadas</p>";
}

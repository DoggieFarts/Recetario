<?php
require "./php/conexion.php";
//echo"sin id";
$creador = $_GET['id'];
$sqlu ="SELECT * FROM `grupos` WHERE idGrupos='$creador'";
//echo $sqlu;
$res = $con->query($sqlu);
//echo"antes del primer if";
//
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $titular = $row["titularG"];
        $idu= $_SESSION['ID'];
        if($idu==$titular){
            echo'<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalGrupo">Agregar usuarios</button>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarUsModal">Eliminar usuarios</button>';
        }
        
    }
}

$sql1 = "SELECT r.nombre AS nombre,imagen,tipoAlimentacion,Categoria,Region,idrecetas,creador FROM `recetas` r JOIN `recetas del grupo` rg ON (rg.recetas_idrecetas = r.idrecetas)
JOIN grupos g ON (rg.Grupos_idGrupos=g.idGrupos) WHERE Grupos_idGrupos='$creador'";
$res = $con->query($sql1);
//echo"antes del primer if";
//echo $sql1;
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo'
<div class="row row-cols-1 row-cols-md-3 g-2">
    <div class="col">
        <div class="card ">
            <img src="'.$row["imagen"].'" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">'.$row["nombre"].'</h5>
                <p class="card-text">'.$row["tipoAlimentacion"].'</p>
                <p class="card-text">'.$row["Categoria"].'</p>
                <p class="card-text">'.$row["Region"].'</p>
                <div class="d-grid gap-1 col-5 mx-auto">
                <a href="VerReceta.php?id='.$row["idrecetas"].'&idu='.$row["creador"].'">
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

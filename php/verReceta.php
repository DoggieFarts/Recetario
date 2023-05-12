<?php
require "./php/conexion.php";
//echo"sin id";
$creador = $_GET['idu'];
$ires=$_GET['id'];
$sql = "SELECT * FROM `recetas` WHERE creador='$creador' and idrecetas='$ires'";
$res = $con->query($sql);
//echo"antes del primer if";
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo'<img src="'.$row["imagen"].'" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
        <h5 class="card-title">'.$row["nombre"].'</h5>
        <p class="card-text">'.$row["tipoAlimentacion"].'</p>
        <p class="card-text">'.$row["Categoria"].'</p>
        <p class="card-text">'.$row["Region"].'</p>
      </div>
    </div>
  </div>
</div>
</div>
</section>
<br>
<section class="centrar-todo">
<div class="container centrar-todo">
<div class="row container_elementos">
  <div class="card border-info mb-3" style="max-width: 18rem;">
    <div class="card-header">Porciones</div>
    <div class="card-body text-info">
      <img class="card-title" src="images/personas.png" width="50" alt="Logo de la página web">
      <p class="card-text">'.$row["porciones"].' Porciones.</p>
    </div>
  </div>
</div>
</div>
</section>
<hr>
<br>
<section class="centrado">
<div class="container1">
<div class="wrap">
  <h2>Ingredientes</h2>
</div>
<div class="inp-ggroup2">
  <ul>';
  $sql1 = "SELECT * FROM `recetasIngredientes` WHERE recetas_idrecetas='$ires'";
  //echo $sql1;
  $res1 = $con->query($sql1);
  if ($res1->num_rows > 0) {
    while ($row1 = $res1->fetch_assoc()) {
        echo'<li>'.$row1["ingredientes_ingrediente"].' '.$row1["cantidad"].$row1["unidad"].'</li>';
    }

  }  
    echo'
  </ul>
</div>
</div>
</section>
<br>
<br>
<br>
<section class="centrado">
<div class="container1">
<div class="wrap">
  <h2>Pasos</h2>
</div>
<div class="inp-ggroup2">
  <div class="row">
    <div class="col-8">
      <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">';
      $sql2 = "SELECT * FROM `Pasos` WHERE recetas_idrecetas='$ires'and recetas_creador='$creador'";
  $res2 = $con->query($sql2);
  if ($res2->num_rows > 0) {
    while ($row2 = $res2->fetch_assoc()) {
        echo'<h4>Paso '.$row2["numPasos"].'</h4>
        <p>'.$row2["paso"].'
        </p>
        <img src="'.$row2["imgpaso"].'" class="img-fluid rounded-start" alt="...">';
    }

  }  
    }
} else {
    echo"<br><p style='color: rgb(136, 1, 1);'>No cuenta con recetas cargadas</p>";
}

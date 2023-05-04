<?php
require "./php/conexion.php";
//echo"sin id";
$creador= $_SESSION['ID'];
if(isset($_POST['barrbus'])){
//echo"if";
$bus=$_POST['barrbus'];
$sql1 = "SELECT creador,idrecetas,r.nombre AS nombre ,r.Categoria AS Categoria,imagen,r.Region AS Region,r.tipoAlimentacion AS tipoAlimentacion
FROM `recetas` r JOIN usuarios u ON(r.creador=u.idusuarios) JOIN recetasIngredientes ri
ON (ri.recetas_idrecetas=r.idrecetas)WHERE (creador='$creador'
or Titular='$creador') and (r.nombre='$bus' or ingredientes_ingrediente='$bus') GROUP BY idrecetas";
//echo $sql1;
$res = $con->query($sql1);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        
        echo'<a href="VerReceta.php?id='.$row["idrecetas"].'&idu='.$row["creador"].'" class="list-group-item list-group-item-action">
                <img src="'.$row["imagen"].'" alt="..." class="img-thumbnail float-left" style="width: 15vw; ">
                '.$row["nombre"].'
                <br>Categoría: '.$row["Categoria"].'
                <br>Region: '.$row["Region"].'
                <br>Tipo de alimentacion: '.$row["tipoAlimentacion"].'
            </a>';
        }
    }
}
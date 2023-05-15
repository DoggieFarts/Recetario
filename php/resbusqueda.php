<?php
require "./php/conexion.php";
//echo"sin id";
$creador= $_SESSION['ID'];
if(isset($_GET['barrbus'])){
//echo"if";
$bus=$_GET['barrbus'];
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

if(isset($_GET["buscEx"])){
    
    $platillo = $_GET["platillo"];
    $alimentacion = $_GET["talimentacion"];
    $ingredientes = $_GET["ingredientes"];
    $ingredientesn = $_GET["ingredientesn"];
    $sql = "SELECT creador,idrecetas,r.nombre AS nombre ,r.Categoria AS Categoria,imagen,r.Region AS Region,r.tipoAlimentacion AS tipoAlimentacion
    FROM `recetas` r JOIN usuarios u ON(r.creador=u.idusuarios) JOIN recetasIngredientes ri
    ON (ri.recetas_idrecetas=r.idrecetas)WHERE (creador='$creador'
    or Titular='$creador') ";

    if(isset( $_GET["ingredientesn"]) &&$ingredientesn!="" ){
        $cadenai = explode(",", $ingredientesn);
        $sqli="AND (";
        $x=0;
        foreach ($cadenai as $ingrediente) {       
            if($x!=0){
                $sqli=$sqli." OR ingredientes_ingrediente <> '$ingrediente'";
            }else{
                $sqli=$sqli."ingredientes_ingrediente <> '$ingrediente'";
                $x++;
            }
        }
        $sqli=$sqli.") ";
        $sql=$sql.$sqli;
    }
    if(isset($_GET["platillo"])&&$platillo!=""){
        $sqln="AND (r.nombre = '$platillo') ";
        $sql=$sql.$sqln;
    }
    if(isset( $_GET["talimentacion"])&&$alimentacion!=""){
        $sqlta="AND (r.tipoAlimentacion = '$alimentacion') ";
        $sql=$sql.$sqlta;
    }
    if(isset( $_GET["ingredientes"])&&$ingredientes!=""){
        $cadenai = explode(",", $ingredientes);
        $sqli="AND (";
        $x=0;
        foreach ($cadenai as $ingrediente) {       
            if($x!=0){
                $sqli=$sqli." OR ingredientes_ingrediente = '$ingrediente'";
            }else{
                $sqli=$sqli."ingredientes_ingrediente = '$ingrediente'";
                $x++;
            }
        }
        $sqli=$sqli.") ";
        $sql=$sql.$sqli;
    }
    $sqlf="GROUP BY idrecetas";
    $sql=$sql.$sqlf;
    echo $sql;
    $res = $con->query($sql);
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
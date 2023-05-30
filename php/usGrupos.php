<?php
require "./php/conexion.php";
//echo"sin id";

if (isset($_POST['crearGr'])) {

    $grupo = $_GET['id'];
    $nombreg = $_POST['nombreGr'];
    if (isset($_POST['correos'])) {
        $correosc = $_POST['correos'];
        $cadenai = explode(",", $correosc);
        foreach ($cadenai as $correo) {
            $sqls = "SELECT idusuarios FROM usuarios WHERE correo = '$correo'";
            echo $sqls;
            $res = $con->query($sqls);
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    $usuario = $row["idusuarios"];
                    $sqlug = "INSERT INTO `miembrosGrupo` (grupos_idGrupos,usuarios_idusuarios) 
                            VALUES ('$grupo','$usuario')";
                    echo $sqlug;
                    try{if ($con->query($sqlug) == true) {
                    }
                }catch(mysqli_sql_exception $e){
                    echo "<br><p style='color: blue;'>Error, este usuario ya esta en este grupo en este grupo</p>";
                }
                }
                header("Location:./MisGrupos.php");
            }
        }
    }
}

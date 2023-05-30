<?php
require "./php/conexion.php";
//echo"sin id";

if (isset($_POST['crearGr'])) {
    if (isset($_POST['nombreGr'])) {
        $sql1 = "SELECT * FROM `grupos`";
        $error = 0;

        $res = $con->query($sql1);
        //echo"antes del primer if";
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $Idres = ($row["idGrupos"]) + 1;
            }
        } else {
            $Idres = 1;
        }
        //echo $sql1;
        $creador = $_SESSION['ID'];
        $nombreg = $_POST['nombreGr'];
        $sql = "INSERT INTO `grupos` (idGrupos,nombre,titularG) VALUES ('$Idres','$nombreg','$creador')";
        //echo $sql;
        if ($con->query($sql) == true) {
            if (isset($_POST['correos'])) {
                $correosc = $_POST['correos'];
                $cadenai = explode(",", $correosc);
                foreach ($cadenai as $correo) {
                    $sqls = "SELECT idusuarios FROM usuarios WHERE correo = '$correo'";
                    //echo $sqls;
                    $res = $con->query($sqls);
                    if ($res->num_rows > 0) {
                        while ($row = $res->fetch_assoc()) {
                            $usuario = $row["idusuarios"];
                            $sqlug = "INSERT INTO `miembrosGrupo` (grupos_idGrupos,usuarios_idusuarios) 
                            VALUES ('$Idres','$usuario')";
                            //echo $sqlug;
                            if ($con->query($sqlug) == true) {
                            }
                        }
                        header("Location:./MisGrupos.php");
                    }
                }
            }
        }
    }
}

<?php
require "./php/conexion.php";
//echo"sin id";

if (isset($_POST['elim'])) {
    $grupo = $_GET['id'];
    if (isset($_POST['idUsuariog'])) {
        foreach ($_POST['idUsuariog'] as $usuario) {
            $sqle = "DELETE FROM miembrosGrupo WHERE grupos_idGrupos = '$grupo' and 
            usuarios_idusuarios = '$usuario'";
            //echo $sqle;
            try {
                if ($con->query($sqle) == true) {
                }
            } catch (mysqli_sql_exception $e) {
                echo "<br><p style='color: blue;'>Error, No fue posible eliminar al usuario</p>";
            }
            
        }
        header("Location:./MisGrupos.php");
    }
}

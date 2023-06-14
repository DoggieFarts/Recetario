<?php
require "./php/conexion.php";
//echo"sin id";

if (isset($_POST['inga'])) {
    if (isset($_POST['alergias'])) {
        $usuario = $_SESSION['ID'];
        foreach ($_POST['alergias'] as $alergia) {
            $sqlal = "INSERT INTO usuariosAlergias (usuarios_idusuarios,ingredientes_ingrediente)
            VALUES ('$usuario','$alergia')";
            //echo $sqle;
            try {
                if ($con->query($sqlal) == true) {
                    unset($_POST);
                }
            } catch (mysqli_sql_exception $e) {
                echo "<br><p style='color: blue;'>Error, No fue posible guardar la alergia</p>";
            }
            
        }
    }
}

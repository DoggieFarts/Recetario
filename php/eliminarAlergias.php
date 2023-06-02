<?php
require "./php/conexion.php";
//echo"sin id";

if (isset($_POST['ElimA'])) {
    $usuario = $_SESSION['ID'];
    if (isset($_POST['valergias'])) {
        foreach ($_POST['valergias'] as $alergia) {
            $sqle = "DELETE FROM usuariosAlergias WHERE usuarios_idusuarios = '$usuario' and 
            ingredientes_ingrediente = '$alergia'";
            //echo $sqle;
            try {
                if ($con->query($sqle) == true) {
                }
                unset($_POST);
            } catch (mysqli_sql_exception $e) {
                echo "<br><p style='color: blue;'>Error, No fue posible eliminar la alergia</p>";
            }
            
        }
        header("Location:./MisGrupos.php");
    }
}

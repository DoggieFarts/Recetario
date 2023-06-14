<?php
require "./php/conexion.php";
//echo"sin id";

if (isset($_POST['EliminarR'])) {
    $receta=$_GET['id'];
    $idus=$_SESSION['ID'];
    $sqle = "DELETE FROM recetas WHERE idrecetas = '$receta' and creador = '$idus'";
    try {
        if ($con->query($sqle) == true) {
            header("Location:MisRecetas.php");
        }
        unset($_POST);
    } catch (mysqli_sql_exception $e) {
        echo "<br><p style='color: blue;'>Error, No fue posible eliminar la alergia</p>";
    }
}
?>
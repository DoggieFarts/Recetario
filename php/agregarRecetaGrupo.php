<?php
require "./php/conexion.php";

if (isset($_POST['arecgrup'])) {
    if (isset($_POST['idRecetas'])) {
        foreach ($_POST['idRecetas'] as $idR) {
            $idG = $_GET['id'];
            $idu= $_SESSION['ID'];
            $sql = "INSERT INTO `recetas del grupo` (`Grupos_idGrupos`, `recetas_idrecetas`,`recetas_creador`) 
            VALUES ('$idG' , '$idR','$idu')";
            //echo $sql;
            try {
                if ($con->query($sql) == true) {
                    //header("Location:Asignacion Alumnos a Grupos.php");

                } else {
                    echo "<br><p style='color: blue;'>Error al asignar</p>";
                }
            } catch (mysqli_sql_exception $e) {
                echo "<br><p style='color: blue;'>Error, esta receta ya existe en este grupo</p>";
            }
        }
    } else {
        echo "<br><p style='color: blue;'>Error, selecciona almenos un Tutor</p>";
    }
}

$con->close();

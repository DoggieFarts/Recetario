<?php
require "./php/conexion.php";
//if (isset($_POST['mandar'])) {
    echo"antes if";
    if (isset($_POST['name'])) {
        $usuario = $_POST['name'];
        if (isset($_POST['ApellidoP'])) {
            $app = $_POST['ApellidoP'];
            if (isset($_POST['ApellidoM'])) {
                $apm = $_POST['ApellidoM'];
                if (isset($_POST['correo'])) {
                    $corr = $_POST['correo'];
                    if (isset($_POST['contraseña'])) {
                        $sql1 = "SELECT * FROM `usuarios`";

                        $res = $con->query($sql1);
                        if ($res->num_rows > 0) {
                            while ($row = $res->fetch_assoc()) {
                                $IdUs = ($row["idusuarios"]) + 1;
                            }
                        } else {
                            $IdUs = 1;
                        }

                        $cont = $_POST['contraseña'];
                        $sql = "INSERT INTO `usuarios` (`idusuarios`, `nombre`, `apP`, `apM`, `Contraseña`, `correo`)VALUES
                    ($IdUs,'$usuario','$app','$apm','$cont','$corr')";
                        if ($con->query($sql) == true) {
                            header("Location:login.php");
                        } else {
                            echo "<br><p style='color: red;'>Error al guardar</p>";
                        }

                        $con->close();
                    } else {
                        echo '<p class="errorl">Error, porfavor llene todos los campos</p>';
                    }
                } else {
                    echo '<p class="errorl">Error, porfavor llene todos los campos</p>';
                }
            } else {
                echo '<p class="errorl">Error, porfavor llene todos los campos</p>';
            }
        } else {
            echo '<p class="errorl">Error, porfavor llene todos los campos</p>';
        }
    } else {
        echo '<p class="errorl">Error, porfavor llene todos los campos</p>';
    }
//}
?>
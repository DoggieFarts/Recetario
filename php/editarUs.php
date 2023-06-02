<?php
require "./php/conexion.php";
$idUs = $_SESSION['ID'];
$n = 0;
$sql = "UPDATE `usuarios` SET";
if (isset($_POST['cambios'])) {
    //echo "if boton";
    if (isset($_POST['name'])&& !empty($_POST['name'])) {
        $usuario = $_POST['name'];
        if ($n == 0) {
            $sql = $sql . " nombre = '$usuario'";
            $n = 1;
        } else {
            $sql = $sql . " ,nombre = '$usuario'";
        }
    }
    if (isset($_POST['apP'])&&!empty($_POST['apP'])) {
        $app = $_POST['apP'];
        if ($n == 0) {
            $sql = $sql." apP = '$app'";
            $n = 1;
        } else {
            $sql = $sql." ,apP = '$app'";
        }
        //echo $app;
    }
    if (isset($_POST['apM'])&&!empty($_POST['apM'])) {
        $apm = $_POST['apM'];
        if ($n == 0) {
            $sql = $sql . " apM = '$apm'";
            $n = 1;
        } else {
            $sql = $sql . " ,apM = '$apm'";
        }
    }
    if (isset($_POST['correo'])&&!empty($_POST['correo'])) {
        $corr = $_POST['correo'];
        if ($n == 0) {
            $sql = $sql . " correo = '$corr'";
            $n = 1;
        } else {
            $sql = $sql . " ,correo = '$corr'";
        }
    }
    if (isset($_POST['contraseña'])&&!empty($_POST['contraseña'])) {
        //echo $sql;
        $cont = $_POST['contraseña'];
        //echo $cont;
        if (isset($_POST['contrasenac'])&&!empty($_POST['contrasenac'])) {
            echo $sql;
            $contc = $_POST['contrasenac'];
            if ($cont == $contc) {
                if ($n == 0) {
                    $sql = $sql . " Contraseña = '$cont'";
                    $n = 1;
                } else {
                    $sql = $sql . " ,Contraseña = '$cont'";
                }
                $sql=$sql." WHERE idusuarios = '$idUs'";
                //echo $sql;
                if ($con->query($sql) == true) {
                    header("Location:userConf.php");
                } else {
                    echo '<p class="errorl">Error, problemas al actualizar usuario/p>';
                }
            }else{
                echo '<p class="errorl">Error, las contraseñas no coinciden</p>';
            }
        }else{
            echo '<p class="errorl">Error, debe de confirmar la contraseña</p>';
        }
    } else {
        $sql=$sql." WHERE idusuarios = '$idUs'";
        //echo $sql;
        if ($con->query($sql) == true) {
            header("Location:userConf.php");
        } else {
            echo '<p class="errorl">Error, problemas al actualizar usuario</p>';
        }
    }
    //echo $sql;

    //$con->close();
}

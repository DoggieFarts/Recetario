<?php
require "./php/conexion.php";
//echo"sin id";
if(isset($_POST['GuardarR'])){
$sql1 = "SELECT * FROM `recetas`";
$error = 0;

$res = $con->query($sql1);
//echo"antes del primer if";
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $Idres = ($row["idrecetas"]) + 1;
    }
} else {
    $Idres = 1;
}
//echo"despues del primer if";
$creador = $_SESSION['ID'];
if (isset($_POST['nombre'])) {
    if (isset($_POST['porciones'])) {
        $tmp_name = $_FILES["imagens"]["tmp_name"];
        $nombrei = $_FILES['imagens']['name'];
        //if (! is_dir('imgRecetas') ) mkdir ( 'imgRecetas' , 0755);
        $carpeta = "./imgRecetas/Usr" . $creador."/Receteta".$Idres;
        $config['upload_path'] = $carpeta;
        if (!is_dir($carpeta)) {
            if (mkdir($carpeta, 0777, true)) {
                $destino =  $carpeta ."/". $Idres . $nombrei;
                if (move_uploaded_file($tmp_name, $destino)) {
                    //echo "se subio";
                } else {
                    //echo $_FILES['imagens']['error'];
                }
            } else {
                die('Fallo al crear las carpetas...');
            }
        }else{
            $destino =  $carpeta ."/". $Idres . $nombrei;
                if (move_uploaded_file($tmp_name, $destino)) {
                    //echo "se subio";
                } else {
                    //echo $_FILES['imagens']['error'];
                }
        }
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $region = $_POST['region'];
        $porciones = $_POST['porciones'];
        $talimentacion = $_POST['talimentacion'];
        $sql = "INSERT INTO `recetas` (`idrecetas`, `nombre`,`tipoAlimentacion`, `porciones`, `Categoria`, `Region`, `creador`,`imagen`)
        VALUES($Idres, '$nombre','$talimentacion', $porciones, '$categoria', '$region', '$creador','$destino')";
        //echo $sql;
        if ($con->query($sql) == true) {
            $ning = $_POST['ning'];
            $ning1 = $_POST['ning1'];
            //echo $ning;
            for ($x = 1; $x <= $ning; $x++) {
                //echo "for";
                if (isset($_POST['ingrediente' . $x])) {
                    $ingrediente = $_POST['ingrediente' . $x];
                    if (isset($_POST['cantidad' . $x])) {
                        $cantidad = $_POST['cantidad' . $x];
                        $medida = $_POST['medida' . $x];
                        $sqling = "SELECT * FROM ingredientes WHERE ingrediente = '$ingrediente'";
                        //echo $sqling;
                        $res = $con->query($sqling);
                        if ($res->num_rows > 0) {
                            $sqlingrec = "INSERT INTO recetasIngredientes (recetas_idrecetas,ingredientes_ingrediente,cantidad,unidad)
                            VALUES ('$Idres','$ingrediente','$cantidad','$medida')";
                            if ($con->query($sqlingrec) == true) {
                                // header("Location:./index.php");
                            } else {
                                echo "<br><p style='color: rgb(136, 1, 1);'>Error al guardar relacion</p>";
                            }
                        } else {
                            $sqling = "INSERT INTO ingredientes (ingrediente) VALUES ('$ingrediente')";
                            if ($con->query($sqling) == true) {
                                $sqlingrec = "INSERT INTO recetasIngredientes (recetas_idrecetas,ingredientes_ingrediente,cantidad,unidad)
                                VALUES ('$Idres','$ingrediente','$cantidad','$medida')";
                                if ($con->query($sqlingrec) == true) {
                                    // header("Location:./index.php");
                                } else {
                                    echo "<br><p style='color: rgb(136, 1, 1);'>Error al guardar relacion</p>";
                                }
                            } else {
                                echo "<br><p style='color: rgb(136, 1, 1);'>Error al guardar el ingrediente</p>";
                            }
                        }
                    } else {
                        echo "<br><p style='color: rgb(136, 1, 1);'>Debe de especificar la cantidad del ingrediente</p>";
                        $sqld = "DELETE FROM recetas WHERE idrecetas ='$Idres' ";
                        $con->query($sqld);
                        $error = 1;
                        break;
                    }
                }else{
                    echo "<br><p style='color: rgb(136, 1, 1);'>No puede dejar ingredientes vacios</p>";
                        $sqld = "DELETE FROM recetas WHERE idrecetas ='$Idres' ";
                        $con->query($sqld);
                        $error = 1;
                        break;
                }
            }
            if ($error == 0) {
                for ($x = 1; $x <= $ning1; $x++) {
                    //echo "for";
                    if (isset($_POST['paso' . $x])) {
                        $paso = $_POST['paso' . $x];
                        $pason = $x;
                        $tmp_name = $_FILES["imp".$x]["tmp_name"];
                        $nombrei = $_FILES['imp'.$x]['name'];
                        //if (! is_dir('imgRecetas') ) mkdir ( 'imgRecetas' , 0755);
                        $carpeta = "./imgRecetas/Usr" . $creador."/Receteta".$Idres."/pasos";
                        $config['upload_path'] = $carpeta;
                        if (!is_dir($carpeta)) {
                            if (mkdir($carpeta, 0777, true)) {
                                $destino =  $carpeta ."/". $Idres .$pason. $nombrei;
                                if (move_uploaded_file($tmp_name, $destino)) {
                                    //echo "se subio";
                                } else {
                                    //echo $_FILES['imp'.$x]['error'];
                                }
                            } else {
                                die('Fallo al crear las carpetas...');
                            }
                        }else{
                            $destino =  $carpeta ."/". $Idres .$pason. $nombrei;
                                if (move_uploaded_file($tmp_name, $destino)) {
                                    //echo "se subio";
                                } else {
                                    //echo $_FILES['imp'.$x]['error'];
                                }
                        }
                        $sqlpa = "INSERT INTO Pasos (numPasos,paso,recetas_idrecetas,recetas_creador,imgpaso)
                        VALUES ('$pason','$paso','$Idres','$creador','$destino')";
                        //echo $sqlpa;
                        if ($con->query($sqlpa) == true) {
                            if ($x == $ning1)
                                header("Location:./MisRecetas.php");
                        } else {
                            echo "<br><p style='color: rgb(136, 1, 1);'>Error al guardar relacion</p>";
                        }
                    } else {
                        echo "<br><p style='color: rgb(136, 1, 1);'>No deje pasos en blanco</p>";
                        $sqld = "DELETE FROM recetas WHERE idrecetas ='$Idres' ";
                        $con->query($sqld);
                        break;
                    }
                }
            }
        } else {
            echo "<br><p style='color: rgb(136, 1, 1);'>Error al guardar receta</p>";
        }
        //echo"$IdMat $Materia $Nivel";                            
        $con->close();
    } else {
    }
} else {
    echo "<br><p style='color: rgb(136, 1, 1);'>Nombre de la reseta vacio</p>";
}
}

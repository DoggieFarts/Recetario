<?php
require "./php/conexion.php";

$creador = $_SESSION['ID'];
$sql = "SELECT * FROM `usuariosAlergias` WHERE usuarios_idusuarios='$creador'";
//echo $sql;                                         
$res =$con->query($sql);
     
if($res->num_rows>0){
    while($row = $res->fetch_assoc()){
        echo'<tr>
            <td>'.$row["ingredientes_ingrediente"].'</td>
            <td>
                <input class="form-check-input me-1" type="checkbox" value="'.$row["ingredientes_ingrediente"].'" name="valergias[]" aria-label="...">
            </td>
        </tr>';
    }
}
else{
    echo "<br><p style='color: red;'>Error no se encontraron datos</p>";
}

$con->close();


?>
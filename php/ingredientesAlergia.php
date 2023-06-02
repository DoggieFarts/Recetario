<?php
require "./php/conexion.php";

$creador = $_SESSION['ID'];
$sql = "SELECT * FROM `ingredientes`";                                         
$res =$con->query($sql);
     
if($res->num_rows>0){
    while($row = $res->fetch_assoc()){
        echo'<tr>
            <td>'.$row["ingrediente"].'</td>
            <td>
                <input class="form-check-input me-1" type="checkbox" value="'.$row["ingrediente"].'" name="alergias[]" aria-label="...">
            </td>
        </tr>';
    }
}
else{
    echo "<br><p style='color: red;'>Error no se encontraron datos</p>";
}

$con->close();


?>
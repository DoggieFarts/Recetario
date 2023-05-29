<?php
require "./php/conexion.php";

$creador = $_SESSION['ID'];
$sql = "SELECT * FROM `recetas` WHERE creador='$creador'";                                         
$res =$con->query($sql);
     
if($res->num_rows>0){
    while($row = $res->fetch_assoc()){
        echo'<tr>
            <td><img src="'.$row["imagen"].'" class="card-img-top" alt="..."></td>
            <td>'.$row["nombre"].'</td>
            <td>
                <input class="form-check-input me-1" type="checkbox" value="'.$row["idrecetas"].'" name="idRecetas[]" aria-label="...">
            </td>
        </tr>';
    }
}
else{
    echo "<br><p style='color: red;'>Error no se encontraron datos</p>";
}

$con->close();


?>
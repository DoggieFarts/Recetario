<?php
require "./php/conexion.php";

$grupo = $_GET['id'];
$sql = "SELECT CONCAT(u.nombre,' ',apP,' ',apM) AS nombre, correo,idusuarios  FROM `miembrosGrupo`mg 
JOIN `usuarios` u ON (u.idusuarios=mg.usuarios_idusuarios) JOIN `grupos` g ON (g.idGrupos=mg.grupos_idGrupos)  
WHERE grupos_idGrupos='$grupo' and usuarios_idusuarios != titularG"; 
//echo $sql;                                        
$res =$con->query($sql);
     
if($res->num_rows>0){
    while($row = $res->fetch_assoc()){
        echo'<tr>
            <td>'.$row["nombre"].'</td>
            <td>'.$row["correo"].'</td>
            <td>
                <input class="form-check-input me-1" type="checkbox" value="'.$row["idusuarios"].'" name="idUsuariog[]" aria-label="...">
            </td>
        </tr>';
    }
}
else{
    echo "<br><p style='color: red;'>Error no se encontraron datos</p>";
}

$con->close();


?>
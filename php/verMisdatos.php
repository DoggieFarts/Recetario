<?php
require "./php/conexion.php";
$idUs = $_SESSION['ID'];
$sql = "SELECT * FROM `usuarios` WHERE idusuarios = $idUs";
$res = $con->query($sql);
//echo"antes del primer if";
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo'
        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="'.$row["nombre"].'">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellido Paterno</label>
                            <input type="text" class="form-control" name="apP" placeholder="'.$row["apP"].'">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellido Materno</label>
                            <input type="text" class="form-control" name="apM" placeholder="'.$row["apM"].'">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Correo electrónicoo</label>
                            <input type="email" class="form-control" name="correo" placeholder="'.$row["correo"].'">
                        </div>
                        <div class="form-group">
                            <label for="Password">Contraseña</label>
                            <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="PasswordValidation">Confirma contraseña</label>
                            <input type="password" class="form-control" name="contrasenac" placeholder="Confirmación">
                        </div>';
    }
}
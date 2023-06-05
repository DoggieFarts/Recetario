<?php
//session_start();
if(isset($_SESSION['Usuario'])){
  $usuario=$_SESSION['Usuario'];
  echo $usuario;
}
?>
<?php
//session_start();
if(isset($_SESSION['Usuario'])){
  $usuario=$_SESSION['Usuario'];
  echo $usuario;
}else{
  //echo'solo else';
  header("Location:./login.php");
}

function cerrarses(){
  if(session_destroy()){
    header("Location:../auth-login.php");
    
  }else{
    
  }
}
?>
<?php
if(isset($_SESSION['Usuario'])){
  
}else{
  //echo'solo else';
  header("Location:./login.php");
}
?>
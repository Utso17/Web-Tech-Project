<?php
session_start();

if(isset($_SESSION['login'])){
    header("location: ../view/home2.php");
}else{
  header("location: ../view/login2.php");
}


?>

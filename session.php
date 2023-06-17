<?php
   
   if(!isset($_SESSION['login_user'])){
      header("location:login2.php");
      die();
   }
   
  
?>
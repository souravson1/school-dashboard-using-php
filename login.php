<?php
   include("config.php");
   include "function.php";   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
       $email = $_POST['email'];
       $password = $_POST['password']; 
       $call_function =login($email,$password,$db);

   }
?>
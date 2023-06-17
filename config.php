<?php
   session_start();
   
   define('DB_SERVER', 'localhost');
   define('DB_EMAIL', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'std');
   $db = mysqli_connect(DB_SERVER,DB_EMAIL,DB_PASSWORD,DB_DATABASE);
?>
<?php 
include 'config.php';
include 'function.php';
session_destroy();
header("location:login2.php");
die();
?>
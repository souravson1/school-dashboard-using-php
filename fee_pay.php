<?php
print_r($_POST);

include 'config.php';
include 'function.php';
$email=$_POST['email'];
$course=$_POST['course'];
$course_fee=$_POST['course_fee'];
$total=$_POST['total'];

//check the value existance in database
$call_function = fee($email,$course,$course_fee,$total,$db);


?>
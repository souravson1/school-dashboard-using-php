<?php
// print_r($_POST);


include 'config.php';
include 'function.php';
$course_name=$_POST['course_name'];
$course_fee=$_POST['course_fee'];
echo $cid= 'C'.rand(001,1000);



$call_function = course($cid,$course_name,$course_fee,$db);



?>
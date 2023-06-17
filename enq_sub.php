<?php


include 'config.php';
include 'function.php';
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$number=$_POST['number'];
$course=$_POST['course'];
$address=$_POST['address'];



$call_function= enquiry($first_name,$last_name,$gender,$email,$course,$address,$number,$db);



?>
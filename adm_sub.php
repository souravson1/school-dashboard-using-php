<?php
print_r($_POST);

include 'config.php';
include 'function.php';
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$course=$_POST['course'];
$doa=$_POST['doa'];
$password=$_POST['password'];
$email=$_POST['email'];
$address2=$_POST['address2'];
$postcode=$_POST['postcode'];
$city=$_POST['city'];
$state=$_POST['state'];
$reg_no= 'R'.rand(001,1000);
$uploaddir = 'C:/xampp/htdocs/dbnw/images/uploads/';
$img= $_FILES['img']['name'];
$uploadfile = $uploaddir . basename($img);
$ds= move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);

//check the value existance in database
$call_function=admission($email,$reg_no,$first_name,$last_name,$gender,$dob,$email,$course,$doa,$password,$address2,$postcode,$city,$state,$img,$db);



?>
<?php
//print_r($_POST);

include 'config.php';
include 'function.php';
$reg_no=$_POST['reg_no'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$percentage=$_POST['percentage'];
$course=$_POST['course'];
$passorfail=$_POST['passorfail'];
$subject1=$_POST['subject1'];
$subject2=$_POST['subject2'];
$subject3=$_POST['subject3'];
$subject4=$_POST['subject4'];
$practical=$_POST['practical'];
$grade=$_POST['grade'];

//check the value existance in database
$call_function = result($reg_no,$percentage,$course,$passorfail,$subject1,$subject2,$subject3,$subject4,$practical,$grade,$db);


?>
<?php

function login($email,$password,$db){

$sql = "SELECT * FROM login where email = '$email' and password = '$password'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
//$active = $row['active'];
 $num_rw= mysqli_num_rows($result);
if($num_rw != 0)
{

//session

$login_session = $row['email'];
$session_role=$row['usertype'];

$_SESSION['login_user']=$login_session;
$_SESSION['user_role']=$session_role;
//get student reg no


$get_sql="select reg_no from admission where email ='$login_session'";
$ex_sql= mysqli_query($db,$get_sql);
$get_result= mysqli_fetch_array($ex_sql);
$std_reg= $get_result['reg_no'];


// redirect to user page

if($row["usertype"]=="student")
{
   $_SESSION['reg_no']=$std_reg;
   header("location:index.php");
}
elseif($row["usertype"]=="admin")
{
   header("location:index.php");
}
}
// If result matched $email and $password, table row must be 1 row
  else {
   
  
   header("location:login2.php?status='f'");
}
}

function admission($eamil,$reg_no,$first_name,$last_name,$gender,$dob,$email,$course,$doa,$password,$address2,$postcode,$city,$state,$img,$db){

	//echo $db;
$check_query= "select * from admission where email='$email' ";
$ex_query = mysqli_query($db,$check_query);
$res_query = mysqli_num_rows($ex_query);
if($res_query == 0)
{
echo $query="INSERT INTO `admission`(reg_no,`first_name`, `last_name`, `gender`, `dob`,email, `course`, `doa`, `password`, `address2`, `postcode`, `city`, `state`) 
VALUES ('$reg_no','$first_name','$last_name','$gender','$dob','$email','$course','$doa','$password', '$address2', '$postcode', '$city', '$state')";

$data="INSERT INTO `login`(`email`, `password`, `reg_no`)
VALUES ('$email', '$password', '$reg_no')";

$image="INSERT INTO `images`(`reg_no`, `img`)
VALUES ('$reg_no', '$img')";

$rs=mysqli_query($db,$query);
$ls=mysqli_query($db,$data);
$ps=mysqli_query($db,$image);

if($rs)
{
	echo "<script>alert('Saved Success!');</script>";
	header ("Location:index.php");
}
else
{
	echo "<script>alert('Saved Failed!');</script>";
}
}
else
{
	$update_query="UPDATE `admission` SET `first_name`='$first_name',`last_name`='$last_name',`gender`='$gender',`dob`='$dob',`course`='$course',`doa`='$doa',`password`='$password',`address2`='$address2',`postcode`='$postcode',`city`='$city',`state`='$state' WHERE email='$email'";
	mysqli_query($db, $update_query);
	echo "<script>alert('update succefully saved!');</script>";
	header ("Location: admission_table.php");
}
}

function result($reg_no,$percentage,$course,$passorfail,$subject1,$subject2,$subject3,$subject4,$practical,$grade,$db)
{
	$check_query= "select * from result where reg_no='$reg_no' ";
$ex_query = mysqli_query($db,$check_query);
$res_query = mysqli_num_rows($ex_query);
if($res_query == 0)
{
$query="INSERT INTO `result`(`reg_no`,`percentage`, `course`, `passorfail`, `subject1`, `subject2`, `subject3`, `subject4`, `practical`, `grade`)
VALUES ('$reg_no','$percentage','$course','$passorfail','$subject1','$subject2','$subject3','$subject4','$practical','$grade')";
$rs=mysqli_query($db,$query);


if($rs)
{
	echo "<script>alert('Saved Success!');</script>";
	header ("Location:index.php");
}
else
{
	echo "<script>alert('Saved Failed!');</script>";
}
}
else
{
	$update_query="UPDATE `result` SET `first_name`='$first_name',`last_name`='$last_name',`percentage`='$percentage',`course`='$course',`passorfail`='$passorfail',`subject1`='$subject1',`subject2`='$subject2',`subject3`='$subject3',`subject4`='$subject4',`practical`='$practical',`grade`='$grade' WHERE email='$email'";
	mysqli_query($db, $update_query);
	echo "<script>alert('update succefully saved!');</script>";
	header ("Location: result_table.php");
}
}

function fee($email,$course,$course_fee,$total,$db){
$check_query= "select * from fee where email='$email' ";
$ex_query = mysqli_query($db,$check_query);
$res_query = mysqli_num_rows($ex_query);
if($res_query == 0)
{
echo $query="INSERT INTO `fee`(`email`, `course`, `course_fee`, `total`) 
VALUES ('$email','$course','$course_fee','$total')";
$rs=mysqli_query($db,$query);


if($rs)
{
	echo "<script>alert('Saved Success!');</script>";
	header ("Location:index.php");
}
else
{
	echo "<script>alert('Saved Failed!');</script>";
}
}
else
{
	$update_query="UPDATE `fee` SET `course`='$course',`course_fee`='$course_fee',`total`='$total' WHERE email='$email'";
	mysqli_query($db, $update_query);
	echo "<script>alert('update succefully saved!');</script>";
	header ("Location: fee_table.php");
}
}

function course($cid,$course_name,$course_fee,$db){
	$query="INSERT INTO `course`(`cid`,`course_name`, `course_fee`) 
VALUES ('$cid','$course_name','$course_fee')";
$rs=mysqli_query($db,$query);


if($rs)
{
	echo "<script>alert('Saved Success!');</script>";
	header ("Location:course_table.php");
}
else
{
	echo "<script>alert('Saved Failed!');</script>";
}
}

function enquiry($first_name,$last_name,$gender,$email,$course,$address,$number,$db){
	$query="INSERT INTO `enquiry`(`first_name`, `last_name`, `gender`,`email`, `course`,`address`,`number`) 
VALUES ('$first_name','$last_name','$gender','$email','$course','$address','$number')";
$rs=mysqli_query($db,$query);


if($rs)
{
	echo "<script>alert('Saved Success!');</script>";
	header ("Location:index.php");
}
else
{
	echo "<script>alert('Saved Failed!');</script>";
}
}



?>
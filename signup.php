<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$email = $_POST['email'];
$email=mysqli_real_escape_string($con,$email);
$mob = $_POST['mob'];
$password = $_POST['password'];
$address=$_POST['address'];
$ref=@$_GET['q'];
$rs="select * from users where email='$email'";
$u = mysqli_query($con, $rs) or die(mysqli_error($con));
if (mysqli_num_rows($u)>0)
{
	header("location:index.php?w=Email Already Registered!!!");
}
else
{
$q3=mysqli_query($con,"INSERT INTO users (name,email,pass,address,phoneno) VALUES('$name' , '$email' , '$password','$address' ,'$mob')");
if($q3)
{
header("location:index.php?q= Registered Sucessfully Goto Login");
}
}
ob_end_flush();
?>
<?php
session_start();
if(isset($_SESSION["cid"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];

/*$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password);*/
$v ="SELECT* FROM users WHERE email = '$email' and pass = '$password'";
 $result= mysqli_query($con, $v) or die(mysqli_error($con));
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$cid= $row['cid'];
}
$_SESSION["cid"] = $cid;
header("location:booking.php?q=1");
}
else
header("location:$ref?w=Wrong Username or Password");
?>
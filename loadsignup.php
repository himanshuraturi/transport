
<?php
session_start();
include_once 'dbConnection.php';
$source = $_POST['source'];
$dest = $_POST['destination'];
$type = $_POST['type'];
$wt=$_POST['weight'];
$date= $_POST['date'];
$cid= $_SESSION['cid'];
$q3=mysqli_query($con,"INSERT INTO book (cid,source,destination,weight,date,type) VALUES('$cid', '$source', '$dest' ,'$wt', '$date','$type')");
if($q3)
{
	$_SESSION['sucess']="booking Sucessful";
header("location:load.php?w= ");
}
?>
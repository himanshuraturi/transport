<?php
session_start();
include_once 'dbConnection.php';

if(isset($_SESSION['cid'])){
if(@$_GET['dbid']) {
$dbid=@$_GET['dbid'];
$r1 = mysqli_query($con,"DELETE FROM book WHERE bid='$dbid' ") or die('Error');
}
}
if ($con->query($r1) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
header("location:load.php");
?>
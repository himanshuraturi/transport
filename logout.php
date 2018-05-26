<?php 
session_start();
if(isset($_SESSION['cid'])){
session_destroy();}
header("location:index.php");
?>
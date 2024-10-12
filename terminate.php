<?php
include 'connection.php';
$uname=$_GET['id'];
$n=mysqli_query($con,"delete from free where uname='$uname'");
header('location:userdetails.php');
?>
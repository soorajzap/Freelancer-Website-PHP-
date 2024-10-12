<?php
include 'connection.php';
$uname=$_GET['id'];
$n=mysqli_query($con,"update free set rights='reject' where uname='$uname'");
header('location:request.php');
?>
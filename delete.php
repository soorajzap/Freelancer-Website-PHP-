<?php
include 'connection.php';
session_start();
$id=$_GET['id'];
$d=$_SESSION['uname'];
$n=mysqli_query($con,"delete from freelance where titile='$id' and uname='$d'");
header('location:userproposal.php');
?>

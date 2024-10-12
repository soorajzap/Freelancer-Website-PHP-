<?php
include 'connection.php';
$bkgno=$_GET['id'];
$n=mysqli_query($con,"update booking set pstatus='please pay',sstatus='accepted' where bkgno='$bkgno'");
header('location:requestbooking.php');
?>
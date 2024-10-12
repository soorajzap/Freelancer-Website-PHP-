<?php
include 'connection.php';
$bkgno=$_GET['id'];
$n=mysqli_query($con,"update booking set sstatus='reject',pstatus='reject' where bkgno='$bkgno'");
header('location:requestbooking.php');
?>
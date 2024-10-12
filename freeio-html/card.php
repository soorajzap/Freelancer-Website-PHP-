<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="card/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="card/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="card/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="card/bootstrap/js/bootstrap.min.js"></script>
</head>
<?php
	include 'connection.php';
    session_start();
    $s=$_SESSION['uname'];
    if(isset($_POST['submit']))
{
 
  $cn=$_POST['cn'];
  $uname=$_POST['cuname'];
  $data=mysqli_query($con,"select * from booking where cname='$s'");

  
  $n=mysqli_query ($con,"insert into booking(cn,cuname) values(' $cn','uname')");
  $n=mysqli_query ($con,"update booking set pstatus='paid' where uname='$uname'");

  echo '<script> alert("");window.location.href = "user.php";</script>';
}
?>
<body>

<div class="container">

<div class="page-header">
    <h1> <small></small></h1>
</div>

<!-- Credit Card Payment Form - START -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="text" name='cn' class="form-control" placeholder="Card number"  name="cn"/>
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="text" class="form-control" placeholder="MM / YY" />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <input type="tel" class="form-control" placeholder="CVC" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD OWNER</label>
                                    <input type="text" name="cuname" class="form-control" value=<?php echo $s;?> />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>Total payable amount</label>
                                   
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12">
                        <li><button type= 'submit' name='submit'>Process payment</button></li>
                       
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>

</body>
</html>
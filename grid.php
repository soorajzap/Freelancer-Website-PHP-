<!doctype html>
<html lang="en">
  <head>
  	<title>Table 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css1/style.css">

	</head>
	<?php
include 'connection.php';

$id=$_GET['id'];


$n=mysqli_query($con,"select * from freelance where titile='$id'");

if(isset($_POST['submit']))
{
  $price=$_POST['price'];
  $dis=$_POST['description'];

  $n=mysqli_query ($con,"update freelance set price='$price',description='$dis' where uname='$d' and titile='$id'");

header('location:userproposal.php');
}
?>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Service providers</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>Service provider</th>
						      <th>Service name</th>
						      <th>price</th>
							  <th>Description</th>
							  <th>Order</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php
							while($result=mysqli_fetch_array($n))
							{
								$u=$result['uname'];
								$m1=mysqli_query($con,"select * from free where uname='$u'");
								$m2=mysqli_fetch_array($m1);
							?>
							
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center">
						      	<div class="img" style="background-image: url(images/person_1.jpg);"></div>
						      	<div class="pl-3 email">
								  <span><?php echo $m2['uname'];?></span>
								  <span><?php echo $m2['emails'];?></span>
                                  <span><?php echo $m2['number'];?></span>
						      	</div>
						      </td>
						      <td><?php echo $result['titile'];?></td>
						      <td><?php echo $result['price'];?></td>
							  <td><?php echo $result['description'];?></td>
						      <td>
							  <div class="d-grid mb20">
                <button class="ud-btn btn-thm" type="submit" name="submit"><a href="bookingreg.php?id=<?php echo $result['id'];?>">Order Now</a><i class="fal fa-arrow-right-long"></i></button>
              </div>
				          	</button>
				        	</td>
						    </tr>
							<?php
							}
							?>
						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js1/jquery.min.js"></script>
  <script src="js1/popper.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/main.js"></script>

	</body>
</html>


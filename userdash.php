<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/freeio-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 04:53:50 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="bidding, fiverr, freelance marketplace, freelancers, freelancing, gigs, hiring, job board, job portal, job posting, jobs marketplace, peopleperhour, proposals, sell services, upwork">
<meta name="description" content="Freeio - Freelance Marketplace HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/ace-responsive-menu.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/bootstrap-select.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/ud-custom-spacing.css">
<link rel="stylesheet" href="css/dashbord_navitaion.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Freeio - Freelance Marketplace HTML Template</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
<!-- Apple Touch Icon -->
<link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
<link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
<link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>	

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
</head>
<?php
include "connection.php";
session_start();
$i=$_SESSION['uname'];
$n=mysqli_query($con,"select * from booking where sstatus='completed' and suname='$i'");
$tot=mysqli_num_rows($n);

$no=mysqli_query($con,"select * from booking where sstatus='accepted' and suname='$i'");
$tota=mysqli_num_rows($no);
$tote=0;
while($row=mysqli_fetch_assoc($n))
{
$tote+=$row['price'];
}


// Establish a new connection to the 'hotel' database
$mysqli = new mysqli("localhost", "root", "", "freelance");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Query to retrieve data from the 'sales' table
$sql = "SELECT bkgdate, SUM(price) AS total_amount FROM booking GROUP BY bkgdate ORDER BY bkgdate";
$result = $mysqli->query($sql);

$labels = [];
$data = [];

if ($result === false) {
    // Handle SQL query error
    echo "Error: " . mysqli_error($mysqli);
} else {
    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['bkgdate'];
        $data[] = $row['total_amount'];
    }
}

// Close the MySQLi connection
$mysqli->close();
?>


<div class="wrapper">
  <div class="preloader"></div>
  
  <!-- Main Header Nav -->
  <header class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
        <div class="row align-items-center justify-content-between">
          <div class="col-6 col-lg-auto">
            <div class="text-center text-lg-start d-flex align-items-center">
              <div class="dashboard_header_logo position-relative me-2 me-xl-5">
                <a href="index.html" class="logo"><img src="images/header-logo-dark.svg" alt=""></a>
              </div>
              <div class="fz20 ml90">
                <a href="#" class="dashboard_sidebar_toggle_icon vam"><img src="images/dashboard-navicon.svg" alt=""></a>
              </div>
              <a class="login-info d-block d-xl-none ml40 vam" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><span class="flaticon-loupe"></span></a>
              
            </div>
          
      </div>
    </nav>
  </header>
  <!-- Search Modal -->
  <div class="search-modal">
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fal fa-xmark"></i></button>
          </div>
          <div class="modal-body">
            <div class="popup-search-field search_area">
              <input type="text" class="form-control border-0" placeholder="What service are you looking for today?">
              <label><span class="far fa-magnifying-glass"></span></label>
              <button class="ud-btn btn-thm" type="submit">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header bdrb1">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="mobile_logo" href="#"><img src="images/header-logo3.svg" alt=""></a>
            <div class="right-side text-end">
              <a class="" href="page-login.html">join</a>
              <a class="menubar ml30" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="posr"><div class="mobile_menu_close_btn"><span class="far fa-times"></span></div></div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
      <ul>
        <li><span></span>
          <ul>
  
          </ul>
        </li>
      
          <ul>
    
              <ul>
               
              </ul>
            </li>

              <ul>
               
              </ul>
            </li>
         
              <ul>
             
              </ul>
            </li>
          </ul>
        </li>
     
          <ul>
       
              <ul>
                <li><a href="userdash.php">Dashboard</a></li>
                <li><a href="userproposal.php">Proposal</a></li>
               
                <li><a href="page-dashboard-reviews.html">Reviews</a></li>
                <li><a href="page-dashboard-invoice.html">Invoice</a></li>
                <li><a href="page-dashboard-payouts.html">Payouts</a></li>
                <li><a href="page-dashboard-statement.html">Statement</a></li>
                <li><a href="page-dashboard-manage-service.html">Manage Service</a></li>
                <li><a href="page-dashboard-add-service.html">Add Services</a></li>
                <li><a href="page-dashboard-manage-jobs.html">Manage Jobs</a></li>
                <li><a href="page-dashboard-manage-project.html">Manage Project</a></li>
                <li><a href="page-dashboard-create-project.html">Create Project</a></li>
                <li><a href="page-dashboard-profile.html">My Profile</a></li>
              </ul>
            </li>
            <li><span>Employee</span>
              <ul>
                <li><a href="page-employee-v1.html">Employee V1</a></li>
                <li><a href="page-employee-v2.html">Employee V2</a></li>
                <li><a href="page-employee-single.html">Employee Single</a></li>
              </ul>
            </li>
            <li><span>Freelancer</span>
              <ul>
                <li><a href="page-freelancer-v1.html">Freelancer V1</a></li>
                <li><a href="page-freelancer-v2.html">Freelancer V2</a></li>
                <li><a href="page-freelancer-v3.html">Freelancer V3</a></li>
                <li><a href="page-freelancer-single.html">Freelancer Single</a></li>
              </ul>
            </li>
            <li><a href="page-become-seller.html">Become Seller</a></li>
          </ul>
        </li>
        <li><span>Pages</span>
          <ul>
            <li><span>About</span>
              <ul>
                <li><a href="page-about.html">About v1</a></li>
                <li><a href="page-about-v2.html">About v2</a></li>
              </ul>
            </li>
            <li><span>Shop</span>
              <ul>
                <li><a href="page-shop.html">List</a></li>
                <li><a href="page-shop-single.html">Single</a></li>
                <li><a href="page-shop-cart.html">Cart</a></li>
                <li><a href="page-shop-checkout.html">Checkout</a></li>
                <li><a href="page-shop-order.html">Order</a></li>
              </ul>
            </li>
            <li><a href="page-contact.html">Contact</a></li>
            <li><a href="page-error.html">404</a></li>
            <li><a href="page-faq.html">Faq</a></li>
            <li><a href="page-help.html">Help</a></li>
            <li><a href="page-invoice.html">Invoices</a></li>
            <li><a href="page-login.html">Login</a></li>
            <li><a href="page-pricing.html">Pricing</a></li>
            <li><a href="page-register.html">Register</a></li>
            <li><a href="page-terms.html">Terms</a></li>
            <li><a href="page-ui-element.html">UI Elements</a></li>
          </ul>
        </li>
        <li><span>Blog</span>
          <ul>
            <li><a href="page-blog-v1.html">List V1</a></li>
            <li><a href="page-blog-v2.html">List V2</a></li>
            <li><a href="page-blog-v3.html">List V3</a></li>
            <li><a href="page-blog-single.html">Single</a></li>
          </ul>
        </li>
        <!-- Only for Mobile View -->
      </ul>
    </nav>
  </div>

  <div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-xl">
      <div class="dashboard__sidebar d-none d-lg-block">
        <div class="dashboard_sidebar_list">
          <p class="fz15 fw400 ff-heading pl30">Start</p>
          <div class="sidebar_list_item">
            <a href="userdash.php" class="items-center -is-active"><i class="flaticon-home mr15"></i>Dashboard</a>
          </div>
          <div class="sidebar_list_item">
            <a href="gigss.php" class="items-center"><i class="flaticon-document mr15"></i>Services</a>
          </div>
         
          <div class="sidebar_list_item ">
            <a href="sellerreview.php" class="items-center"><i class="flaticon-review-1 mr15"></i>Feedback</a>
          </div>
          <div class="sidebar_list_item">
            <a href="History.php" class="items-center"><i class="flaticon-receipt mr15"></i>History</a>
          </div>
          <div class="sidebar_list_item">
            <a href="requestbooking.php" class="items-center"><i class="flaticon-dollar mr15"></i>Orders</a>
          </div>
          <div class="sidebar_list_item">
            <a href="statement.php" class="items-center"><i class="flaticon-web mr15"></i>Statements</a>
          </div>
          <p class="fz15 fw400 ff-heading pl30 mt30">Organize and Manage</p>
          <div class="sidebar_list_item ">
            <a href="gigs.php" class="items-center"><i class="flaticon-presentation mr15"></i>Manage Services</a>
          </div>
         
          
          <p class="fz15 fw400 ff-heading pl30 mt30">Account</p>
          
          <div class="sidebar_list_item ">
            <a href="change.php" class="items-center"><i class="flaticon-content mr15"></i> Change password</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="Homepage.php" class="items-center"><i class="flaticon-logout mr15"></i>Logout</a>
          </div>
        </div>
      </div>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content hover-bgc-color">
          <div class="row pb40">
            <div class="col-lg-12">
              <div class="dashboard_navigationbar d-block d-lg-none">
                <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                  <ul id="myDropdown" class="dropdown-content">
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">Start</p></li>
                    <li class="active"><a href="userdash.php"><i class="flaticon-home mr10"></i>Dashboard</a></li>
                    <li><a href="userproposal.php"><i class="flaticon-document mr10"></i>My Proposals</a></li>

                    <li><a href="page-dashboard-reviews.html"><i class="flaticon-review-1 mr10"></i>Reviews</a></li>
                    <li><a href="page-dashboard-invoice.html"><i class="flaticon-receipt mr10"></i>Invoice</a></li>
                    <li><a href="page-dashboard-payouts.html"><i class="flaticon-dollar mr10"></i>Payouts</a></li>
                    <li><a href="page-dashboard-statement.html"><i class="flaticon-web mr10"></i>Statements</a></li>
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">Organize and Manage</p></li>
                    <li><a href="page-dashboard-manage-service.html"><i class="flaticon-presentation mr10"></i>Manage Services</a></li>
                    <li><a href="page-dashboard-manage-jobs.html"><i class="flaticon-briefcase mr10"></i>Manage Jobs</a></li>
                    <li><a href="page-dashboard-manage-project.html"><i class="flaticon-content mr10"></i>Manage Project</a></li>
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">Account</p></li>
                    <li><a href="page-dashboard-profile.html"><i class="flaticon-photo mr10"></i>My Profile</a></li>
                    <li><a href="page-login.html"><i class="flaticon-logout mr10"></i>Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="dashboard_title_area">
                <h2>Dashboard</h2>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex align-items-center justify-content-between statistics_funfact">
                <div class="details">
                  <div class="fz15">Services Offered</div>
                  <div class="title"><?php echo $tot; ?></div>
                  <div class="text fz14"><span class="text-thm"></span>Completed</div>
                </div>
                <div class="icon text-center"><i class="flaticon-contract"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex align-items-center justify-content-between statistics_funfact">
                <div class="details">
                  <div class="fz15">Total Earnings</div>
                  <div class="title"><?php echo $tote; ?></div>
                  <div class="text fz14"><span class="text-thm"></span>Earned</div>
                </div>
                <div class="icon text-center"><i class="flaticon-success"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex align-items-center justify-content-between statistics_funfact">
                <div class="details">
                  <div class="fz15">in Queue Services</div>
                  <div class="title"><?php echo $tota; ?></div>
                  <div class="text fz14"><span class="text-thm"></span> New Queue</div>
                </div>
                <div class="icon text-center"><i class="flaticon-review"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex align-items-center justify-content-between statistics_funfact">
                <div class="details">
                  <div class="fz15">Total Review</div>
                  <div class="title"></div>
                  <div class="text fz14"><span class="text-thm"></span> New Review</div>
                </div>
                <div class="icon text-center"><i class="flaticon-review-1"></i></div>
              </div>
            </div>
          </div>
          <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
                    
                    <div class="col-xl-6 custome-width">
    <canvas id="myChart" style="height:230px;"></canvas>
</div>
</div>      
          
        <footer class="dashboard_footer pt30 pb30">
          <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-between">
              <div class="col-auto">
                <div class="copyright-widget">
                  <p class="mb-md-0">© Freeio. 2023 CreativeLayers. All rights reserved.</p>
                </div>
              </div>
              <div class="col-auto">
                <div class="footer_bottom_right_btns at-home8 text-center text-lg-end">
                  <ul class="p-0 m-0">
        
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="js/jquery-3.6.4.min.js"></script> 
<script src="js/jquery-migrate-3.0.0.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-select.min.js"></script> 
<script src="js/jquery.mmenu.all.js"></script> 
<script src="js/ace-responsive-menu.js"></script> 

<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/dashboard-script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

			
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var labels = <?php echo json_encode($labels); ?>;
    var data = <?php echo json_encode($data); ?>;

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Sales',
                data: data,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>

<!-- Mirrored from creativelayers.net/themes/freeio-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 04:53:53 GMT -->
</html>
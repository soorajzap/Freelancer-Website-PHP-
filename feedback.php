<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/freeio-html/page-shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 04:54:26 GMT -->
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
<link rel="stylesheet" href="css/ud-custom-spacing.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<?php
	include 'connection.php';
    $g=$_GET['id'];
    $data=mysqli_query($con,"select * from booking where bkgno='$g'");
    $rs=mysqli_fetch_array($data);

    if(isset($_POST['submit']))
{
 
  $fdb=$_POST['fdback'];
  $n=mysqli_query ($con,"update booking set fdback='$fdb' where bkgno='$g'");
header('location:userinbox.php');
}
?>
<body>
<div class="wrapper ovh">
  <div class="preloader"></div>
  
  <!-- Main Header Nav -->
  <header class="header-nav nav-innerpage-style main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container-fluid posr menu_bdrt1">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto pe-0">
            <div class="d-flex align-items-center">
              <a class="header-logo bdrr1 pr30 pr5-xl" href="index.html"><img src="images/header-logo-dark.svg" alt="Header Logo"></a>
              <div class="home1_style">
                <div id="mega-menu">
                  <a class="btn-mega fw500" href="#"><span class="pl30 pl10-xl pr5 fz15 vam flaticon-menu"></span> Categories</a>
                  <ul class="menu ps-0">
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-developer"></span> <span class="menu-title">Development & IT</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-web-design-1"></span> <span class="menu-title">Design & Creative</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-digital-marketing"></span> <span class="menu-title">Digital Marketing</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-translator"></span> <span class="menu-title">Writing & Translation</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-microphone"></span> <span class="menu-title">Music & Audio</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-video-file"></span> <span class="menu-title">Video & Animation</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-ruler"></span> <span class="menu-title">Engineering & Architecture</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-goal"></span> <span class="menu-title">Finance & Accounting</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex align-items-center">
              <!-- Responsive Menu Structure-->
              <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                
                  <!-- Level Two-->
                  <ul>
                    
                  </ul>
                </li>
                
                
              </ul>
              
              <a class="ud-btn btn-thm add-joining" href="Homepage.php">Sign out</a>
            </div>
          </div>
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

  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header bdrb1">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="mobile_logo" href="#"><img src="images/header-logo-dark.svg" alt=""></a>
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
        <li><span>Home</span>
          <ul>
            <li><a href="index.html">Home V1</a></li>
            <li><a href="index2.html">Home V2</a></li>
            <li><a href="index3.html">Home V3</a></li>
            <li><a href="index4.html">Home V4</a></li>
            <li><a href="index5.html">Home V5</a></li>
            <li><a href="index6.html">Home V6</a></li>
            <li><a href="index7.html">Home V7</a></li>
            <li><a href="index8.html">Home V8</a></li>
            <li><a href="index9.html">Home V9</a></li>
            <li><a href="index10.html">Home V10</a></li>
          </ul>
        </li>
        <li><span>Browse Jobs</span>
          <ul>
            <li><span>Services</span>
              <ul>
                <li><a href="page-service-v1.html">Service v1</a></li>
                <li><a href="page-service-v2.html">Service v2</a></li>
                <li><a href="page-service-v3.html">Service v3</a></li>
                <li><a href="page-service-v4.html">Service v4</a></li>
                <li><a href="page-service-v5.html">Service v5</a></li>
                <li><a href="page-service-v6.html">Service v6</a></li>
                <li><a href="page-service-v7.html">Service v7</a></li>
                <li><a href="page-service-all.html">Service All</a></li>
                <li><a href="page-service-single.html">Service Single</a></li>
              </ul>
            </li>
            <li><span>Projects</span>
              <ul>
                <li><a href="page-project-v1.html">Project v1</a></li>
                <li><a href="page-project-single.html">Project Single</a></li>
              </ul>
            </li>
            <li><span>Job View</span>
              <ul>
                <li><a href="page-job-list-v1.html">Job list v1</a></li>
                <li><a href="page-job-list-v2.html">Job list v2</a></li>
                <li><a href="page-job-list-v3.html">Job list V3</a></li>
                <li><a href="page-job-list-single.html">Job Single</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><span>Users</span>
          <ul>
            <li><span>Dashboard</span>
              <ul>
                <li><a href="page-dashboard.html">Dashboard</a></li>
                <li><a href="page-dashboard-proposal.html">Proposal</a></li>
                <li><a href="page-dashboard-save.html">Saved</a></li>
                <li><a href="page-dashboard-message.html">Message</a></li>
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

  <div class="body_content">
    <!-- Blog Section -->
    <section class="breadcumb-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <div class="breadcumb-list">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pt40 pb0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-title">
              <h2 class="title">FEEDBACK</h2>
              <p class="text mb-0">Give your feedback for better experience</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Shop Cart Area -->
    <section class="shop-checkout pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
        <div class="col-lg-8">
          <div class="shopping_cart_table table-responsive">
            <table class="table table-borderless">
              <thead>
            <form method="POST">
             <div class="mb20">
                <label class="form-label fw600 dark-color">Write your feedaback</label>
                <input type="text" class="form-control"  name="fdback">
              </div>

                
                 
              </tbody>
            </table>
            <div class="d-grid mb20">
                <button class="ud-btn btn-thm" type="submit" name="submit">Feedback<i class="fal fa-arrow-right-long"></i></button>
              </div>
            <div class="coupon-form mt30 mb30-md">
              <div class="d-md-flex align-items-center justify-content-between">
                
              </form>   
              </div>
            </div>
          </div>
        </div>
        
        </div>
      </div>
    </section>

    <!-- Our Footer --> 
    <section class="footer-style1 pt25 pb-0">
      <div class="container">
        <div class="row bb-white-light pb10 mb60">
          <div class="col-md-7">
            <div class="d-block text-center text-md-start justify-content-center justify-content-md-start d-md-flex align-items-center mb-3 mb-md-0">
              <a class="fz17 fw500 text-white mr15-md mr30" href="#">Terms of Service</a>
              <a class="fz17 fw500 text-white mr15-md mr30" href="#">Privacy Policy</a>
              <a class="fz17 fw500 text-white" href="#">Site Map</a>
            </div>
          </div>
          <div class="col-md-5">
            <div class="social-widget text-center text-md-end">
              <div class="social-style1">
                <a class="text-white me-2 fw500 fz17" href="#">Follow us</a>
                <a href="#"><i class="fab fa-facebook-f list-inline-item"></i></a>
                <a href="#"><i class="fab fa-twitter list-inline-item"></i></a>
                <a href="#"><i class="fab fa-instagram list-inline-item"></i></a>
                <a href="#"><i class="fab fa-linkedin-in list-inline-item"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="link-style1 mb-4 mb-sm-5">
              <h5 class="text-white mb15">About</h5>
              <div class="link-list">
                <a href="#">Careers</a>
                <a href="#">Press & News</a>
                <a href="#">Partnerships</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Investor Relations</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="link-style1 mb-4 mb-sm-5">
              <h5 class="text-white mb15">Categories</h5>
              <ul class="ps-0">
                <li><a href="#">Graphics & Design</a></li>
                <li><a href="#">Digital Marketing</a></li>
                <li><a href="#">Writing & Translation</a></li>
                <li><a href="#">Video & Animation</a></li>
                <li><a href="#">Music & Audio</a></li>
                <li><a href="#">Programming & Tech</a></li>
                <li><a href="#">Data</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Lifestyle</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="link-style1 mb-4 mb-sm-5">
              <h5 class="text-white mb15">Support</h5>
              <ul class="ps-0">
                <li><a href="#">Help & Support</a></li>
                <li><a href="#">Trust & Safety</a></li>
                <li><a href="#">Selling on Freeio</a></li>
                <li><a href="#">Buying on Freeio</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="footer-widget">
             
          </div>
        </div>
      </div>
      <div class="container white-bdrt1 py-4">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="text-center text-lg-start">
              <p class="copyright-text mb-2 mb-md-0 text-white-light ff-heading">Freeio. 2023 </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer_bottom_right_btns text-center text-lg-end">
              <ul class="p-0 m-0">
                
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
  </div>
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
<script src="js/wow.min.js"></script>
<!-- Custom script for all pages -->
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/freeio-html/page-shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 04:54:26 GMT -->
</html>
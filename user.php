<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/freeio-html/index10.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 15:48:20 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="bidding, fiverr, freelance marketplace, freelancers, freelancing, gigs, hiring, job board, job portal, job posting, jobs marketplace, peopleperhour, proposals, sell services, upwork">
<meta name="description" content="Freeio - Freelance Marketplace HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/ace-responsive-menu.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/bootstrap-select.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/ud-custom-spacing.css">
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

$data=mysqli_query($con,"select distinct titile,photo,description from freelance");
?>
<body>
<body class="maxw1700 mx-auto">
<div class="wrapper ovh">
  <div class="preloader"></div>
  
  <!-- Main Header Nav -->
  <header class="header-nav nav-innerpage-style stricky main-menu border-0">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container posr menu_bdrt1">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto">
            <div class="d-flex align-items-center justify-content-between">
              <div class="logos mr20">
                <a class="header-logo logo2" href="index.html"><img src="images/header-logo-dark.svg" alt="Header Logo"></a>
              </div>
              <a class="login-info mr15" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><span class="flaticon-loupe vam"></span></a>
              <!-- Responsive Menu Structure-->
              <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                
                
                <li class="visible_list"> <a class="list-item" href="userinbox.php"><span class="title">My orders</span></a>

                
                <li> <a class="list-item" href="page-contact.html"></a></li>
               
              </ul>
              
            </div>
          </div>
          
          <div class="col-auto">
            <div class="d-flex align-items-center">
              <a class="login-info mx15-lg mx30" href="sellerreq.php"><span class="d-none d-xl-inline-block">Become a</span> Seller</a>
              <a class="login-info mr15-lg mr30" href="Homepage.php">Sign out</a>
              <a class="ud-btn btn-white2 add-joining at-home10" href="page-register.html">Join</a>
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
            <li><a href="sellerreq.php">Become Seller</a></li>
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
    <!-- Home Banner Style V1 -->
    <section class="hero-home10 bdrs24 p-0 overflow-hidden">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-banner-wrapper home10-hero-content">
              <div class="navi_pagi_bottom_center dots_nav_light banner-style-one slider-1-grid owl-theme owl-carousel">
                <div class="slide slide-one" style="background-image: url(images/home/home-3.jpg);">
                  <div class="container">
                    <div class="row">
                      <div class="col-xl-7 mx-auto text-center">
                        <h3 class="banner-title">With talented freelancers <br class="d-none d-lg-block">ando more work.</h3>
                        <p class="banner-text text-white ff-heading mb30">Millions of people use freeio.com to turn their ideas into reality.</p>
                        <div class="d-sm-flex justify-content-center banner-btn">
                          <a href="" class="ud-btn btn-white me-0 me-sm-3">Find Work</a>
                          <a href="" class="ud-btn btn-dark">Find Talent</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slide slide-one" style="background-image: url(images/home/home-2.jpg);">
                  <div class="container">
                    <div class="row">
                      <div class="col-xl-7 mx-auto text-center">
                        <h3 class="banner-title">Freelance Services For <br class="d-none d-lg-block">Your Business</h3>
                        <p class="banner-text text-white ff-heading mb30">Millions of people use freeio.com to turn their ideas into reality.</p>
                        <div class="d-sm-flex justify-content-center banner-btn">
                          <a href="page-project-v1.html" class="ud-btn btn-white me-0 me-sm-3">Find Work</a>
                          <a href="page-freelancer-v1.html" class="ud-btn btn-dark">Find Talent</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="slide slide-one" style="background-image: url(images/home/home-1.jpg);">
                  <div class="container">
                    <div class="row">
                      <div class="col-xl-7 mx-auto text-center">
                        <h3 class="banner-title">With talented freelancers <br class="d-none d-lg-block">ando more work.</h3>
                        <p class="banner-text text-white ff-heading mb30">Millions of people use freeio.com to turn their ideas into reality.</p>
                        <div class="d-sm-flex justify-content-center banner-btn">
                          <a href="page-project-v1.html" class="ud-btn btn-white me-0 me-sm-3">Find Work</a>
                          <a href="page-freelancer-v1.html" class="ud-btn btn-dark">Find Talent</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.carousel-btn-block banner-carousel-btn --> 
            </div>
            <!-- /.main-banner-wrapper --> 
          </div>
        </div>
      </div>
    </section>

    <!-- Trending Services -->
    <section class="pb-0 pb30-md">
      <div class="container">
        <div class="row align-items-center wow fadeInUp">
          <div class="col-lg-9">
            <div class="main-title">
              <h2 class="title">Trending Services</h2>
              <p class="paragraph">Most viewed and all-time top-selling services</p>
            </div>
          </div>
        </div>
       
        <div class="row">
        
          <div class="col-lg-12">
            <div class="navi_pagi_top_right slider-4-grid owl-carousel owl-theme">
            <?php
while($res=mysqli_fetch_array($data))
{
?>
              <div class="item">
                <div class="listing-style1 bdrs16">
                  <div class="list-thumb">
                    <img class="w-100" src="<?php echo $res['photo'];?>" alt="">
                    <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1"><?php echo $res['titile'];?></p>
                    <h5 class="list-title"><?php echo $res['description'];?></a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <div class="list-content">
                    <h5 class="list-title"><a href="grid.php?id=<?php echo $res['titile'];?>">Book now</a></h5>
                    
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="#">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="images/team/fl-s-1.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                       
                      </a>
                      <div class="budget">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
}
?>
               
              
            </div>
            <div class="text-center mt20">
              <a class="ud-btn2" href="page-service-single.html"></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Talent by category -->
    <section class="pb40-md">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Browse talent by category</h2>
              <p class="paragraph">Get some Inspirations from 1800+ skills</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-lg-12">
            <div class="category-slider-home10 navi_pagi_top_right slider-7-grid owl-carousel owl-theme wow fadeInUp">
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs16">
                  <div class="icon"><span class="flaticon-developer"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Development & IT</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs16">
                  <div class="icon"><span class="flaticon-web-design-1"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Design & Creative</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs16">
                  <div class="icon"><span class="flaticon-digital-marketing"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Digital Marketing</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs16">
                  <div class="icon"><span class="flaticon-translator"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Writing & Translation</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs16">
                  <div class="icon"><span class="flaticon-microphone"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Music & Audio</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs16">
                  <div class="icon"><span class="flaticon-video-file"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Video & Animation</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs16">
                  <div class="icon"><span class="flaticon-ruler"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Engineering & Architecture</h5>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1 bdr1 bdrs16">
                  <div class="icon"><span class="flaticon-goal"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h5 class="title">Finance & Accounting</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt10">
              <a class="ud-btn2" href="page-service-single.html"></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <!-- CTA Banner -->
    <section class="cta-banner-about2 at-home10-2 mx-auto position-relative pt60-lg pb60-lg">
      <div class="container">
        <div class="row align-items-center wow fadeInDown" data-wow-delay="400ms">
          <div class="col-lg-7 col-xl-5 offset-xl-1 wow fadeInRight mb60-xs mb100-md">
            <div class="mb30">
              <div class="main-title">
                <h2 class="title">A whole world of freelance <br class="d-none d-xl-block"> talent at your fingertips</h2>
              </div>
            </div>
            <div class="why-chose-list">
              <div class="list-one d-flex align-items-start mb30">
                <span class="list-icon flex-shrink-0 flaticon-badge"></span>
                <div class="list-content flex-grow-1 ml20">
                  <h4 class="mb-1">Proof of quality</h4>
                  <p class="text mb-0 fz15">Check any pro’s work samples, client reviews, and identity <br class="d-none d-lg-block"> verification.</p>
                </div>
              </div>
              <div class="list-one d-flex align-items-start mb30">
                <span class="list-icon flex-shrink-0 flaticon-money"></span>
                <div class="list-content flex-grow-1 ml20">
                  <h4 class="mb-1">No cost until you hire</h4>
                  <p class="text mb-0 fz15">Interview potential fits for your job, negotiate rates, and only pay <br class="d-none d-lg-block"> for work you approve.</p>
                </div>
              </div>
              <div class="list-one d-flex align-items-start mb30">
                <span class="list-icon flex-shrink-0 flaticon-security"></span>
                <div class="list-content flex-grow-1 ml20">
                  <h4 class="mb-1">Safe and secure</h4>
                  <p class="text mb-0 fz15">Focus on your work knowing we help protect your data and privacy. We’re here with 24/7 support if you need it.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-xl-4 wow fadeInLeft">
            <div class="listbox-style1 px30 py-5 bdrs16 bgc-dark position-relative">
              <div class="list-style1">
                <ul class="mb-0">
                  <li class="text-white fw500"><i class="far fa-check dark-color bgc-white"></i>The best for every budget</li>
                  <li class="text-white fw500"><i class="far fa-check dark-color bgc-white"></i>Quality work done quickly</li>
                  <li class="text-white fw500"><i class="far fa-check dark-color bgc-white"></i>Protected payments, every time</li>
                  <li class="text-white fw500 mb-0"><i class="far fa-check dark-color bgc-white"></i>24/7 support</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img class="home10-cta-img bdrs24" src="images/about/about-10.jpg" alt="">
    </section>

    <!-- Our Testimonials -->
    <section class="our-testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2>Testimonials</h2>
              <p class="paragraph">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 m-auto wow fadeInUp" data-wow-delay="500ms">
            <div class="testimonial-style2">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-1st" role="tabpanel" aria-labelledby="pills-1st-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade show active" id="pills-2nd" role="tabpanel" aria-labelledby="pills-2nd-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-3rd" role="tabpanel" aria-labelledby="pills-3rd-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-4th" role="tabpanel" aria-labelledby="pills-4th-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-5th" role="tabpanel" aria-labelledby="pills-5th-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
              </div>
              <div class="tab-list position-relative">
                <ul class="nav nav-pills justify-content-md-center" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link ps-0" id="pills-1st-tab" data-bs-toggle="pill" data-bs-target="#pills-1st" type="button" role="tab" aria-controls="pills-1st" aria-selected="true"><img src="images/testimonials/testi-1.png" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-2nd-tab" data-bs-toggle="pill" data-bs-target="#pills-2nd" type="button" role="tab" aria-controls="pills-2nd" aria-selected="false"><img src="images/testimonials/testi-2.png" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-3rd-tab" data-bs-toggle="pill" data-bs-target="#pills-3rd" type="button" role="tab" aria-controls="pills-3rd" aria-selected="false"><img src="images/testimonials/testi-3.png" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-4th-tab" data-bs-toggle="pill" data-bs-target="#pills-4th" type="button" role="tab" aria-controls="pills-4th" aria-selected="false"><img src="images/testimonials/testi-4.png" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link pe-0" id="pills-5th-tab" data-bs-toggle="pill" data-bs-target="#pills-5th" type="button" role="tab" aria-controls="pills-5th" aria-selected="false"><img src="images/testimonials/testi-5.png" alt=""></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Banner -->
    <section class="cta-banner-about2 at-home10 mx-auto position-relative pt60-lg pb30-lg">
      <img class="cta-about2-img at-home10 bdrs24 d-none d-xl-block" src="images/about/about-9.jpg" alt="">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 offset-xl-6 wow fadeInUp" data-wow-delay="200ms">
            <div class="main-title">
              <h2 class="title text-capitalize">Need something done?</h2>
              <p class="text">Most viewed and all-time top-selling services</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInDown" data-wow-delay="400ms">
          <div class="col-xl-9 offset-xl-3">
            <div class="row">
              <div class="col-sm-6 col-lg-4">
                <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
                  <span class="icon fz40 flaticon-cv"></span>
                  <h4 class="iconbox-title mt20">Post a job</h4>
                  <p class="text mb-0">It’s free and easy to post a job.<br class="d-none d-md-block"> Simply fill in a title, description.</p>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
                  <span class="icon fz40 flaticon-web-design"></span>
                  <h4 class="iconbox-title mt20">Choose freelancers</h4>
                  <p class="text mb-0">It’s free and easy to post a job.<br class="d-none d-md-block"> Simply fill in a title, description.</p>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4">
                <div class="iconbox-style9 default-box-shadow1 bgc-white p40 bdrs12 position-relative mb30">
                  <span class="icon fz40 flaticon-secure"></span>
                  <h4 class="iconbox-title mt20">Pay safely</h4>
                  <p class="text mb-0">It’s free and easy to post a job.<br class="d-none d-md-block"> Simply fill in a title, description.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   

    <!-- Our CTA --> 
    <section class="our-cta cta-home3-last pt90 pb90 pt60-md pb60-md mt150 mt0-lg bdrs24">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-7 col-xl-5 wow fadeInLeft">
            <div class="cta-style3">
              <h2 class="cta-title mb-3">Find the talent needed to get your business growing.</h2>
              <p class="cta-text mb-4">Advertise your jobs to millions of monthly users and search 15.8 million CVs</p>
              <a href="sellerreq.php" class="ud-btn btn-dark">Get Started <i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 col-xl-5 position-relative wow zoomIn">
            <div class="cta-img">
              <img class="w-100" src="images/about/about-5.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Partners --> 
    <section class="our-partners">
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-lg-12">
            <div class="main-title text-center">
              <h6>Trusted by the world’s best</h6>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/1.png" alt="1.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/2.png" alt="2.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/3.png" alt="3.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/4.png" alt="4.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/5.png" alt="5.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/6.png" alt="6.png"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Footer --> 
    <section class="footer-style1 at-home10 pt25 pb-0">
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
<script src="js/owl.js"></script>
<script src="js/pricing-table.js"></script>
<!-- Custom script for all pages -->
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/freeio-html/index10.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 15:48:20 GMT -->
</html>
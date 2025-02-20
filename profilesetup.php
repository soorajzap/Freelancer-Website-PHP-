<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from creativelayers.net/themes/freeio-html/page-freelancer-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 04:53:59 GMT -->
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
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/style.css">
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
session_start();
$i=$_SESSION['uname'];
$n=mysqli_query($con,"select * from profile ");
$re=mysqli_fetch_array($n);
?>
<body>
<div class="wrapper ovh">
  <div class="preloader"></div>
  
  <!-- Main Header Nav -->
 
    <section class="breadcumb-section pt-0">
      <div class="cta-service-v1 freelancer-single-style mx-auto maxw1700 pt120 pt60-sm pb120 pb60-sm bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg px30-lg">
        <img class="left-top-img wow zoomIn" src="images/vector-img/left-top.png" alt="">
        <img class="right-bottom-img wow zoomIn" src="images/vector-img/right-bottom.png" alt="">
        <div class="container">
          <div class="row wow fadeInUp">
            <div class="col-xl-7">
              <div class="position-relative">
                <h2>Seller</h2>
                <div class="list-meta d-sm-flex align-items-center mt30">
                  <a class="position-relative freelancer-single-style" href="#">
                    <span class="online"></span>
                    <img class="rounded-circle w-100 wa-sm mb15-sm" src="images/team/fl-1.png" alt="Freelancer Photo">
                  </a>
                  <div class="ml20 ml0-xs">
                    <h5 class="title mb-1"><?php echo $re['name'];?></h5>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Service Details -->
    <section class="pt10 pb90 pb30-md">
      <div class="container">
        <div class="row wow fadeInUp">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-sm-6 col-xl-3">
                <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-target"></span></div>
                  <div class="details">
                    <h5 class="title"><?php echo $re['gen'];?></h5>
                    <p class="mb-0 text"><?php echo $re['spec'];?></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-goal"></span></div>
                  <div class="details">
                    <h5 class="title"><?php echo $re['con'];?></h5>
                    <p class="mb-0 text">921</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-fifteen"></span></div>
                  <div class="details">
                    <h5 class="title">Total Hours</h5>
                    <p class="mb-0 text">1,499</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="iconbox-style1 contact-style d-flex align-items-start mb30">
                  <div class="icon flex-shrink-0"><span class="flaticon-file-1"></span></div>
                  <div class="details">
                    <h5 class="title">In Queue Service</h5>
                    <p class="mb-0 text">20</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="service-about">
              <h4>Description</h4>
              <p class="text mb30">
              <p class="text mb30"><?php echo $re['intro'];?></p>
              <hr class="opacity-100 mb60 mt60">
              <h4 class="mb30">Education</h4>
              <div class="educational-quality">
                <div class="m-circle text-thm">M</div>
                <div class="wrapper mb40">
                  <span class="tag">2012 - 2014</span>
                  <h5 class="mt15">Bachlors in Fine Arts</h5>
                  <h6 class="text-thm">Modern College</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
                <div class="m-circle before-none text-thm">M</div>
                <div class="wrapper mb60">
                  <span class="tag">2008 - 2012</span>
                  <h5 class="mt15">Computer Science</h5>
                  <h6 class="text-thm">Harvartd University</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
              <hr class="opacity-100 mb60">
              <h4 class="mb30">Work & Experience</h4>
              <div class="educational-quality">
                <div class="m-circle text-thm">M</div>
                <div class="wrapper mb40">
                  <span class="tag">2012 - 2014</span>
                  <h5 class="mt15">UX Designer</h5>
                  <h6 class="text-thm">Dropbox</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
                <div class="m-circle before-none text-thm">M</div>
                <div class="wrapper mb60">
                  <span class="tag">2008 - 2012</span>
                  <h5 class="mt15">Art Director</h5>
                  <h6 class="text-thm">amazon</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
              </div>
              <hr class="opacity-100 mb60">
              <h4 class="mb30">Awards adn Certificates</h4>
              <div class="educational-quality ps-0">
                <div class="wrapper mb40">
                  <span class="tag">2012 - 2014</span>
                  <h5 class="mt15">UI UX Design</h5>
                  <h6 class="text-thm">Udemy</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum <br class="d-none d-lg-block"> primis in faucibus.</p>
                </div>
                <div class="wrapper mb60">
                  <span class="tag">2008 - 2012</span>
                  <h5 class="mt15">App Design</h5>
                  <h6 class="text-thm">Google</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum <br class="d-none d-lg-block"> primis in faucibus.</p>
                </div>
              </div>
              <hr class="opacity-100 mb60">
              <h4 class="mb30">Featured Services</h4>
              <div class="row mb35">
                <div class="col-sm-6 col-xl-4">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="images/listings/g-1.jpg" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                      <h6 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h6>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta mt15">
                        <div class="budget">
                          <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <div class="listing-thumbIn-slider position-relative navi_pagi_bottom_center slider-1-grid owl-carousel owl-theme">
                        <div class="item">
                          <img class="w-100" src="images/listings/g-2.jpg" alt="">
                          <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                        </div>
                        <div class="item">
                          <img class="w-100" src="images/listings/g-3.jpg" alt="">
                          <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                        </div>
                        <div class="item">
                          <img class="w-100" src="images/listings/g-4.jpg" alt="">
                          <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                        </div>
                        <div class="item">
                          <img class="w-100" src="images/listings/g-5.jpg" alt="">
                          <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Art & Illustration</p>
                      <h6 class="list-title"><a href="page-services-single.html">I will create modern flat design illustration</a></h6>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta mt15">
                        <div class="budget">
                          <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                  <div class="listing-style1">
                    <div class="list-thumb">
                      <img class="w-100" src="images/listings/g-3.jpg" alt="">
                      <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                    </div>
                    <div class="list-content">
                      <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                      <h6 class="list-title line-clamp2"><a href="page-services-single.html">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h6>
                      <div class="review-meta d-flex align-items-center">
                        <i class="fas fa-star fz10 review-color me-2"></i>
                        <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                      </div>
                      <hr class="my-2">
                      <div class="list-meta mt15">
                        <div class="budget">
                          <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="opacity-100 mb60">
              <div class="product_single_content mb60">
                <div class="mbp_pagination_comments">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="total_review mb30">
                        <h4>80 Reviews</h4>
                      </div>
                      <div class="d-md-flex align-items-center mb30">
                        <div class="total-review-box d-flex align-items-center text-center mb30-sm">
                          <div class="wrapper mx-auto">
                            <div class="t-review mb15">4.96</div>
                            <h5>Exceptional</h5>
                            <p class="text mb-0">3,014 reviews</p>
                          </div>
                        </div>
                        <div class="wrapper ml60 ml0-sm">
                          <div class="review-list d-flex align-items-center mb10">
                            <div class="list-number">5 Star</div>
                              <div class="progress">
                                <div class="progress-bar" style="width: 90%;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            <div class="value text-end">58</div>
                          </div>
                          <div class="review-list d-flex align-items-center mb10">
                            <div class="list-number">4 Star</div>
                              <div class="progress">
                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            <div class="value text-end">20</div>
                          </div>
                          <div class="review-list d-flex align-items-center mb10">
                            <div class="list-number">3 Star</div>
                              <div class="progress">
                                <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            <div class="value text-end">15</div>
                          </div>
                          <div class="review-list d-flex align-items-center mb10">
                            <div class="list-number">2 Star</div>
                              <div class="progress">
                                <div class="progress-bar" style="width: 30%;" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            <div class="value text-end">2</div>
                          </div>
                          <div class="review-list d-flex align-items-center mb10">
                            <div class="list-number">1 Star</div>
                              <div class="progress">
                                <div class="progress-bar" style="width: 20%;" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            <div class="value text-end">1</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mbp_first position-relative d-flex align-items-center justify-content-start mb30-sm">
                        <img src="images/blog/comments-2.png" class="mr-3" alt="comments-2.png">
                        <div class="ml20">
                          <h6 class="mt-0 mb-0">Bessie Cooper</h6>
                          <div><span class="fz14">12 March 2022</span></div>
                        </div>
                      </div>
                      <p class="text mt20 mb20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                      <div class="review_cansel_btns d-flex">
                        <a href="#"><i class="fas fa-thumbs-up"></i>Helpful</a>
                        <a href="#"><i class="fas fa-thumbs-down"></i>Not helpful</a>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="mbp_first position-relative d-flex align-items-center justify-content-start mt30 mb30-sm">
                        <img src="images/blog/comments-2.png" class="mr-3" alt="comments-2.png">
                        <div class="ml20">
                          <h6 class="mt-0 mb-0">Darrell Steward</h6>
                          <div><span class="fz14">12 March 2022</span></div>
                        </div>
                      </div>
                      <p class="text mt20 mb20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                      <div class="review_cansel_btns d-flex pb30">
                        <a href="#"><i class="fas fa-thumbs-up"></i>Helpful</a>
                        <a href="#"><i class="fas fa-thumbs-down"></i>Not helpful</a>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="position-relative bdrb1 pb50">
                        <a href="page-service-single.html" class="ud-btn btn-light-thm">See More<i class="fal fa-arrow-right-long"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bsp_reveiw_wrt">
                <h6 class="fz17">Add a Review</h6>
                <p class="text">Your email address will not be published. Required fields are marked *</p>
                <h6>Your rating of this product</h6>
                <div class="d-flex">
                  <i class="fas fa-star review-color"></i>
                  <i class="far fa-star review-color ms-2"></i>
                  <i class="far fa-star review-color ms-2"></i>
                  <i class="far fa-star review-color ms-2"></i>
                  <i class="far fa-star review-color ms-2"></i>
                </div>
                <form class="comments_form mt30 mb30-md">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mb-4">
                        <label class="fw500 fz16 ff-heading dark-color mb-2">Comment</label>
                        <textarea class="pt15" rows="6" placeholder="There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."></textarea>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb20">
                        <label class="fw500 ff-heading dark-color mb-2">Name</label>
                        <input type="text" class="form-control" placeholder="Ali Tufan">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="mb20">
                        <label class="fw500 ff-heading dark-color mb-2">Email</label>
                        <input type="email" class="form-control" placeholder="creativelayers088">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb20">
                        <label class="custom_checkbox fz15 ff-heading">Save my name, email, and website in this browser for the next time I comment.
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                      <a href="#" class="ud-btn btn-thm">Send<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
         

    <!-- Our Footer --> 
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
<script src="js/isotop.js"></script> 
<script src="js/owl.js"></script> 
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/freeio-html/page-freelancer-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 04:53:59 GMT -->
</html>
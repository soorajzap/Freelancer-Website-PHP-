<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from salero.dexignzone.com/codeigniter/demo/index_2 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 12:59:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	 <!-- Meta -->
     <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	<meta name="keywords" content="admin, admin dashboard, admin template, analytics, bootstrap, bootstrap 5, codeigniter admin template, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app, frontend, shop, shop cart, blog">
	<meta name="description" content="Discover Salero - the ultimate admin dashboard and CodeIgniter template. Specially designed for professionals, and for business. W3Admin provides advanced features and an easy-to-use interface for creating a top-quality website">
	<meta property="og:title" content="Salero CodeIgniter Restaurant Admin Bootstrap Template">
	<meta property="og:description" content="Discover Salero - the ultimate admin dashboard and CodeIgniter template. Specially designed for professionals, and for business. W3Admin provides advanced features and an easy-to-use interface for creating a top-quality website">
	<meta property="og:image" content="../social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- PAGE TITLE HERE -->
	<title>Salero CodeIgniter Restaurant Admin Bootstrap Template</title>
    <!-- Favicon icon -->
	
	<link rel="icon" type="image/png" sizes="16x16" href="adm/public/assets/images/favicon.png">	
	
		
		 <link href="adm/public/assets/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet" type="text/css"/>	
		
		 <link href="adm/public/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>	
		
		 <link href="adm/public/assets/vendor/dotted-map/css/contrib/jquery.smallipop-0.3.0.min.css" rel="stylesheet" type="text/css"/>	
		
		 <link href="adm/public/assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>	
			
		 <link href="adm/public/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>	
		
		 <link href="adm/public/assets/css/style.css" rel="stylesheet" type="text/css"/>
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>	
		
</head>
<?php
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




<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-box">
				<div class="icon">
				  <i class="fas fa-utensils"></i>
				</div>
			</div>
		</div>
	</div>	
	
    <!--*******************
        Preloader end
    ********************-->
	
	<!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

		<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="adm/index.html" class="brand-logo">
        <svg class="logo-abbr" width="50" height="57" viewBox="0 0 50 57" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 7C0 3.13401 3.13401 0 7 0H43C46.866 0 50 3.13401 50 7V43C50 46.866 46.866 50 43 50H7C3.13401 50 0 46.866 0 43V7Z" fill="#0C14FE"/>
            <path d="M27.8958 8.32118L49.6278 26.9793V56.2579L18.9467 34.8688L28.9669 22.5963L27.8958 8.32118Z" fill="#0E15DF"/>
            <path d="M25.248 19.0703C22.7192 19.0703 20.6618 21.126 20.6587 23.6539H29.8373C29.8341 21.126 27.7766 19.0703 25.248 19.0703Z" fill="white"/>
            <path d="M25.248 9.95406C18.36 9.95406 12.7562 15.5579 12.7562 22.4458C12.7562 25.1845 13.6262 27.7844 15.2721 29.9646C16.7937 31.98 18.9285 33.511 21.3126 34.3037L24.4914 39.617C24.6506 39.8831 24.9379 40.046 25.248 40.046C25.558 40.046 25.8453 39.8831 26.0045 39.617L29.1834 34.3037C31.5674 33.511 33.7022 31.98 35.2238 29.9646C36.8697 27.7844 37.7397 25.1845 37.7397 22.4458C37.7397 15.5579 32.1359 9.95406 25.248 9.95406ZM31.9818 25.4172H18.5141C18.0272 25.4172 17.6325 25.0225 17.6325 24.5356C17.6325 24.0487 18.0272 23.654 18.5141 23.654H18.8954C18.8983 20.4528 21.2812 17.7989 24.3664 17.3686V17.2599C24.3664 16.773 24.7611 16.3783 25.248 16.3783C25.7349 16.3783 26.1296 16.773 26.1296 17.2599V17.3686C29.2148 17.7988 31.5977 20.4528 31.6006 23.654H31.982C32.4688 23.654 32.8636 24.0487 32.8636 24.5356C32.8636 25.0225 32.4687 25.4172 31.9818 25.4172Z" fill="white"/>
        </svg>
        <svg class="brand-title" width="108" height="47" viewBox="0 0 108 47" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M16.2728 15.4619C16.2728 8.61908 6.16869 10.2206 6.16869 6.66814C6.16869 5.38693 7.07136 4.77544 8.26522 4.80456C9.60467 4.83368 10.5365 5.61987 10.6238 6.93021H16.0107C15.8069 3.02832 12.8077 0.815319 8.35258 0.815319C4.07215 0.815319 0.898233 2.97009 0.898233 6.84285C0.839996 14.0934 11.0606 12.0551 11.0606 15.8405C11.0606 17.0343 10.1288 17.7623 8.67288 17.7623C7.27519 17.7623 6.28516 17.0052 6.13957 15.4328H0.839996C0.985589 19.5676 4.42158 21.7515 8.81847 21.7515C13.5939 21.7515 16.2728 18.8979 16.2728 15.4619ZM18.3402 13.3945C18.3402 18.5194 21.5142 21.7807 25.4743 21.7807C27.8911 21.7807 29.6091 20.6742 30.5118 19.2473V21.5477H35.491V5.29957H30.5118V7.59993C29.6382 6.17313 27.9202 5.06662 25.5034 5.06662C21.5142 5.06662 18.3402 8.26966 18.3402 13.3945ZM30.5118 13.4236C30.5118 16.0152 28.852 17.442 26.9593 17.442C25.0957 17.442 23.4069 15.9861 23.4069 13.3945C23.4069 10.803 25.0957 9.40528 26.9593 9.40528C28.852 9.40528 30.5118 10.8321 30.5118 13.4236ZM39.1017 21.5477H44.081V0H39.1017V21.5477ZM54.8549 9.05586C56.5146 9.05586 57.9123 10.075 57.9123 11.8512H51.681C51.9721 10.0459 53.2242 9.05586 54.8549 9.05586ZM62.6295 16.1608H57.3299C56.9223 17.0343 56.1361 17.7332 54.7384 17.7332C53.1369 17.7332 51.8265 16.7432 51.6518 14.6175H62.9207C62.9789 14.1225 63.0081 13.6275 63.0081 13.1616C63.0081 8.21142 59.6594 5.06662 54.9131 5.06662C50.0794 5.06662 46.7017 8.26966 46.7017 13.4236C46.7017 18.5776 50.1377 21.7807 54.9131 21.7807C58.9606 21.7807 61.8433 19.3347 62.6295 16.1608ZM70.608 14.006C70.608 11.2106 71.9766 10.3953 74.3352 10.3953H75.7037V5.12486C73.5198 5.12486 71.7436 6.2896 70.608 8.00759V5.29957H65.6287V21.5477H70.608V14.006ZM93.9902 13.4236C93.9902 8.26966 90.3212 5.06662 85.5458 5.06662C80.7995 5.06662 77.1014 8.26966 77.1014 13.4236C77.1014 18.5776 80.7121 21.7807 85.4876 21.7807C90.263 21.7807 93.9902 18.5776 93.9902 13.4236ZM82.168 13.4236C82.168 10.6574 83.7404 9.37617 85.5458 9.37617C87.2929 9.37617 88.9235 10.6574 88.9235 13.4236C88.9235 16.1608 87.2638 17.4711 85.4876 17.4711C83.6822 17.4711 82.168 16.1608 82.168 13.4236Z" fill="#222222"/>
        <path d="M6.424 42L4.348 38.496H2.8V42H1.96V33.612H4.48C5.416 33.612 6.124 33.836 6.604 34.284C7.092 34.732 7.336 35.32 7.336 36.048C7.336 36.656 7.16 37.176 6.808 37.608C6.464 38.032 5.952 38.308 5.272 38.436L7.432 42H6.424ZM2.8 37.812H4.492C5.148 37.812 5.64 37.652 5.968 37.332C6.304 37.012 6.472 36.584 6.472 36.048C6.472 35.496 6.312 35.072 5.992 34.776C5.672 34.472 5.168 34.32 4.48 34.32H2.8V37.812ZM14.931 38.388C14.931 38.676 14.923 38.896 14.907 39.048H9.47097C9.49497 39.544 9.61497 39.968 9.83097 40.32C10.047 40.672 10.331 40.94 10.683 41.124C11.035 41.3 11.419 41.388 11.835 41.388C12.379 41.388 12.835 41.256 13.203 40.992C13.579 40.728 13.827 40.372 13.947 39.924H14.835C14.675 40.564 14.331 41.088 13.803 41.496C13.283 41.896 12.627 42.096 11.835 42.096C11.219 42.096 10.667 41.96 10.179 41.688C9.69097 41.408 9.30697 41.016 9.02697 40.512C8.75497 40 8.61897 39.404 8.61897 38.724C8.61897 38.044 8.75497 37.448 9.02697 36.936C9.29897 36.424 9.67897 36.032 10.167 35.76C10.655 35.488 11.211 35.352 11.835 35.352C12.459 35.352 13.003 35.488 13.467 35.76C13.939 36.032 14.299 36.4 14.547 36.864C14.803 37.32 14.931 37.828 14.931 38.388ZM14.079 38.364C14.087 37.876 13.987 37.46 13.779 37.116C13.579 36.772 13.303 36.512 12.951 36.336C12.599 36.16 12.215 36.072 11.799 36.072C11.175 36.072 10.643 36.272 10.203 36.672C9.76297 37.072 9.51897 37.636 9.47097 38.364H14.079ZM18.7238 42.096C17.9718 42.096 17.3558 41.924 16.8758 41.58C16.4038 41.228 16.1398 40.752 16.0838 40.152H16.9478C16.9878 40.52 17.1598 40.82 17.4638 41.052C17.7758 41.276 18.1918 41.388 18.7118 41.388C19.1678 41.388 19.5238 41.28 19.7798 41.064C20.0438 40.848 20.1758 40.58 20.1758 40.26C20.1758 40.036 20.1038 39.852 19.9598 39.708C19.8158 39.564 19.6318 39.452 19.4078 39.372C19.1918 39.284 18.8958 39.192 18.5198 39.096C18.0318 38.968 17.6358 38.84 17.3318 38.712C17.0278 38.584 16.7678 38.396 16.5518 38.148C16.3438 37.892 16.2398 37.552 16.2398 37.128C16.2398 36.808 16.3358 36.512 16.5278 36.24C16.7198 35.968 16.9918 35.752 17.3438 35.592C17.6958 35.432 18.0958 35.352 18.5438 35.352C19.2478 35.352 19.8158 35.532 20.2478 35.892C20.6798 36.244 20.9118 36.732 20.9438 37.356H20.1038C20.0798 36.972 19.9278 36.664 19.6478 36.432C19.3758 36.192 18.9998 36.072 18.5198 36.072C18.0958 36.072 17.7518 36.172 17.4878 36.372C17.2238 36.572 17.0918 36.82 17.0918 37.116C17.0918 37.372 17.1678 37.584 17.3198 37.752C17.4798 37.912 17.6758 38.04 17.9078 38.136C18.1398 38.224 18.4518 38.324 18.8438 38.436C19.3158 38.564 19.6918 38.688 19.9718 38.808C20.2518 38.928 20.4918 39.104 20.6918 39.336C20.8918 39.568 20.9958 39.876 21.0038 40.26C21.0038 40.612 20.9078 40.928 20.7158 41.208C20.5238 41.48 20.2558 41.696 19.9118 41.856C19.5678 42.016 19.1718 42.096 18.7238 42.096ZM23.677 36.156V40.224C23.677 40.624 23.753 40.9 23.905 41.052C24.057 41.204 24.325 41.28 24.709 41.28H25.477V42H24.577C23.985 42 23.545 41.864 23.257 41.592C22.969 41.312 22.825 40.856 22.825 40.224V36.156H21.913V35.448H22.825V33.804H23.677V35.448H25.477V36.156H23.677ZM26.4783 38.712C26.4783 38.04 26.6103 37.452 26.8743 36.948C27.1463 36.436 27.5183 36.044 27.9903 35.772C28.4703 35.492 29.0103 35.352 29.6103 35.352C30.2343 35.352 30.7703 35.496 31.2183 35.784C31.6743 36.072 32.0023 36.44 32.2023 36.888V35.448H33.0423V42H32.2023V40.548C31.9943 40.996 31.6623 41.368 31.2063 41.664C30.7583 41.952 30.2223 42.096 29.5983 42.096C29.0063 42.096 28.4703 41.956 27.9903 41.676C27.5183 41.396 27.1463 41 26.8743 40.488C26.6103 39.976 26.4783 39.384 26.4783 38.712ZM32.2023 38.724C32.2023 38.196 32.0943 37.732 31.8783 37.332C31.6623 36.932 31.3663 36.624 30.9903 36.408C30.6223 36.192 30.2143 36.084 29.7663 36.084C29.3023 36.084 28.8863 36.188 28.5183 36.396C28.1503 36.604 27.8583 36.908 27.6423 37.308C27.4343 37.7 27.3303 38.168 27.3303 38.712C27.3303 39.248 27.4343 39.72 27.6423 40.128C27.8583 40.528 28.1503 40.836 28.5183 41.052C28.8863 41.26 29.3023 41.364 29.7663 41.364C30.2143 41.364 30.6223 41.256 30.9903 41.04C31.3663 40.824 31.6623 40.516 31.8783 40.116C32.0943 39.716 32.2023 39.252 32.2023 38.724ZM40.636 35.448V42H39.796V40.848C39.604 41.256 39.308 41.568 38.908 41.784C38.508 42 38.06 42.108 37.564 42.108C36.78 42.108 36.14 41.868 35.644 41.388C35.148 40.9 34.9 40.196 34.9 39.276V35.448H35.728V39.18C35.728 39.892 35.904 40.436 36.256 40.812C36.616 41.188 37.104 41.376 37.72 41.376C38.352 41.376 38.856 41.176 39.232 40.776C39.608 40.376 39.796 39.788 39.796 39.012V35.448H40.636ZM43.3938 36.612C43.5778 36.204 43.8578 35.888 44.2338 35.664C44.6178 35.44 45.0858 35.328 45.6378 35.328V36.204H45.4098C44.8018 36.204 44.3138 36.368 43.9458 36.696C43.5778 37.024 43.3938 37.572 43.3938 38.34V42H42.5538V35.448H43.3938V36.612ZM46.5174 38.712C46.5174 38.04 46.6494 37.452 46.9134 36.948C47.1854 36.436 47.5574 36.044 48.0294 35.772C48.5094 35.492 49.0494 35.352 49.6494 35.352C50.2734 35.352 50.8094 35.496 51.2574 35.784C51.7134 36.072 52.0414 36.44 52.2414 36.888V35.448H53.0814V42H52.2414V40.548C52.0334 40.996 51.7014 41.368 51.2454 41.664C50.7974 41.952 50.2614 42.096 49.6374 42.096C49.0454 42.096 48.5094 41.956 48.0294 41.676C47.5574 41.396 47.1854 41 46.9134 40.488C46.6494 39.976 46.5174 39.384 46.5174 38.712ZM52.2414 38.724C52.2414 38.196 52.1334 37.732 51.9174 37.332C51.7014 36.932 51.4054 36.624 51.0294 36.408C50.6614 36.192 50.2534 36.084 49.8054 36.084C49.3414 36.084 48.9254 36.188 48.5574 36.396C48.1894 36.604 47.8974 36.908 47.6814 37.308C47.4734 37.7 47.3694 38.168 47.3694 38.712C47.3694 39.248 47.4734 39.72 47.6814 40.128C47.8974 40.528 48.1894 40.836 48.5574 41.052C48.9254 41.26 49.3414 41.364 49.8054 41.364C50.2534 41.364 50.6614 41.256 51.0294 41.04C51.4054 40.824 51.7014 40.516 51.9174 40.116C52.1334 39.716 52.2414 39.252 52.2414 38.724ZM58.0711 35.328C58.8551 35.328 59.4951 35.572 59.9911 36.06C60.4871 36.54 60.7351 37.24 60.7351 38.16V42H59.9071V38.256C59.9071 37.544 59.7271 37 59.3671 36.624C59.0151 36.248 58.5311 36.06 57.9151 36.06C57.2831 36.06 56.7791 36.26 56.4031 36.66C56.0271 37.06 55.8391 37.648 55.8391 38.424V42H54.9991V35.448H55.8391V36.564C56.0471 36.164 56.3471 35.86 56.7391 35.652C57.1311 35.436 57.5751 35.328 58.0711 35.328ZM63.6848 36.156V40.224C63.6848 40.624 63.7608 40.9 63.9128 41.052C64.0648 41.204 64.3328 41.28 64.7168 41.28H65.4848V42H64.5848C63.9928 42 63.5528 41.864 63.2648 41.592C62.9768 41.312 62.8328 40.856 62.8328 40.224V36.156H61.9208V35.448H62.8328V33.804H63.6848V35.448H65.4848V36.156H63.6848ZM75.0231 40.008H71.2071L70.4751 42H69.5871L72.6471 33.72H73.5951L76.6431 42H75.7551L75.0231 40.008ZM74.7711 39.312L73.1151 34.776L71.4591 39.312H74.7711ZM77.6073 38.712C77.6073 38.04 77.7433 37.452 78.0153 36.948C78.2873 36.436 78.6593 36.044 79.1313 35.772C79.6113 35.492 80.1513 35.352 80.7513 35.352C81.3273 35.352 81.8473 35.492 82.3113 35.772C82.7753 36.052 83.1153 36.416 83.3313 36.864V33.12H84.1713V42H83.3313V40.536C83.1313 40.992 82.8033 41.368 82.3473 41.664C81.8913 41.952 81.3553 42.096 80.7393 42.096C80.1393 42.096 79.5993 41.956 79.1193 41.676C78.6473 41.396 78.2753 41 78.0033 40.488C77.7393 39.976 77.6073 39.384 77.6073 38.712ZM83.3313 38.724C83.3313 38.196 83.2233 37.732 83.0073 37.332C82.7913 36.932 82.4953 36.624 82.1193 36.408C81.7513 36.192 81.3433 36.084 80.8953 36.084C80.4313 36.084 80.0153 36.188 79.6473 36.396C79.2793 36.604 78.9873 36.908 78.7713 37.308C78.5633 37.7 78.4593 38.168 78.4593 38.712C78.4593 39.248 78.5633 39.72 78.7713 40.128C78.9873 40.528 79.2793 40.836 79.6473 41.052C80.0153 41.26 80.4313 41.364 80.8953 41.364C81.3433 41.364 81.7513 41.256 82.1193 41.04C82.4953 40.824 82.7913 40.516 83.0073 40.116C83.2233 39.716 83.3313 39.252 83.3313 38.724ZM93.8889 35.328C94.6569 35.328 95.2809 35.572 95.7609 36.06C96.2489 36.54 96.4929 37.24 96.4929 38.16V42H95.6649V38.256C95.6649 37.544 95.4929 37 95.1489 36.624C94.8049 36.248 94.3369 36.06 93.7449 36.06C93.1289 36.06 92.6369 36.264 92.2689 36.672C91.9009 37.08 91.7169 37.672 91.7169 38.448V42H90.8889V38.256C90.8889 37.544 90.7169 37 90.3729 36.624C90.0289 36.248 89.5569 36.06 88.9569 36.06C88.3409 36.06 87.8489 36.264 87.4809 36.672C87.1129 37.08 86.9289 37.672 86.9289 38.448V42H86.0889V35.448H86.9289V36.576C87.1369 36.168 87.4329 35.86 87.8169 35.652C88.2009 35.436 88.6289 35.328 89.1009 35.328C89.6689 35.328 90.1649 35.464 90.5889 35.736C91.0209 36.008 91.3329 36.408 91.5249 36.936C91.7009 36.416 92.0009 36.02 92.4249 35.748C92.8569 35.468 93.3449 35.328 93.8889 35.328ZM98.7784 34.212C98.6104 34.212 98.4664 34.152 98.3464 34.032C98.2264 33.912 98.1664 33.764 98.1664 33.588C98.1664 33.412 98.2264 33.268 98.3464 33.156C98.4664 33.036 98.6104 32.976 98.7784 32.976C98.9464 32.976 99.0904 33.036 99.2104 33.156C99.3304 33.268 99.3904 33.412 99.3904 33.588C99.3904 33.764 99.3304 33.912 99.2104 34.032C99.0904 34.152 98.9464 34.212 98.7784 34.212ZM99.1984 35.448V42H98.3584V35.448H99.1984ZM104.173 35.328C104.957 35.328 105.597 35.572 106.093 36.06C106.589 36.54 106.837 37.24 106.837 38.16V42H106.009V38.256C106.009 37.544 105.829 37 105.469 36.624C105.117 36.248 104.633 36.06 104.017 36.06C103.385 36.06 102.881 36.26 102.505 36.66C102.129 37.06 101.941 37.648 101.941 38.424V42H101.101V35.448H101.941V36.564C102.149 36.164 102.449 35.86 102.841 35.652C103.233 35.436 103.677 35.328 104.173 35.328Z" fill="#666666"/>
        </svg>
        

    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
**********************************-->		<!--*********************************
	Chat box start
***********************************-->

<!--**********************************
	Chat box End
**********************************-->        <!--*********************************
	Header start
***********************************-->

<!--**********************************
	Header end 
**********************************-->        <!--*********************************
    Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="menu-title">YOUR COMPANY</li>
            <li><a class="has-arrow " href="adm/javascript:void(0);" aria-expanded="false">
                <div class="menu-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.13478 20.7733V17.7156C9.13478 16.9351 9.77217 16.3023 10.5584 16.3023H13.4326C13.8102 16.3023 14.1723 16.4512 14.4393 16.7163C14.7063 16.9813 14.8563 17.3408 14.8563 17.7156V20.7733C14.8539 21.0978 14.9821 21.4099 15.2124 21.6402C15.4427 21.8705 15.756 22 16.0829 22H18.0438C18.9596 22.0024 19.8388 21.6428 20.4872 21.0008C21.1356 20.3588 21.5 19.487 21.5 18.5778V9.86686C21.5 9.13246 21.1721 8.43584 20.6046 7.96467L13.934 2.67587C12.7737 1.74856 11.1111 1.7785 9.98539 2.74698L3.46701 7.96467C2.87274 8.42195 2.51755 9.12064 2.5 9.86686V18.5689C2.5 20.4639 4.04738 22 5.95617 22H7.87229C8.55123 22 9.103 21.4562 9.10792 20.7822L9.13478 20.7733Z" fill="#90959F"/>
                    </svg>
                </div>	
                <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    
                   
                    <li><a href="order_list.php">Order List</a></li>
                    <li><a href="addpr.php">Add Products</a></li>	
                    <li><a href="editpr.php">Edit Products</a></li>
                    <li><a href="adm/customers.html">Customers</a></li>
                    <li><a href="adm/reviews.html">Reviews</a></li>
                    <li><a href="adm/blog.html">Blog</a></li>
                </ul>
            </li>
            
</div>           

</div>
</div>

<!--**********************************
    Sidebar end
**********************************-->        <!--*********************************
	Content body start
***********************************-->
<div class="content-body">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-sm-6">
				<div class="card">
					<div class="card-body d-flex justify-content-between">
						<div class="card-menu">
							<span>Total Orders</span>
							<h2 class="mb-0"><?php echo $totalOrders; ?></h2>
						</div>
						<div class="icon-box icon-box-lg bg-primary-light">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 8.7773C0.00165391 10.5563 1.44323 11.9981 3.2222 12H8.7778C10.5568 11.9981 11.9983 10.5563 12 8.7773V3.2227C11.9983 1.44373 10.5568 0.00192952 8.7778 0H3.2222C1.44323 0.00192952 0.00165319 1.44373 0 3.2227V8.7773ZM2 3.2227C2.00072 2.54791 2.54741 2.00099 3.2222 2L8.7778 2C9.45259 2.00099 9.99928 2.54791 10 3.2227V8.7773C9.99929 9.45209 9.45259 9.99901 8.7778 10L3.2222 10C2.54741 9.99901 2.00072 9.45209 2 8.7773V3.2227Z" fill="var(--primary)"/>
								<path d="M0 22.7773C0.00165272 24.5563 1.44323 25.9981 3.2222 26L8.7778 26C10.5568 25.9981 11.9983 24.5563 12 22.7773V17.2227C11.9983 15.4437 10.5568 14.0019 8.7778 14L3.2222 14C1.44323 14.0019 0.00165391 15.4437 0 17.2227V22.7773ZM2 17.2227C2.00072 16.5479 2.54741 16.001 3.2222 16H8.7778C9.45259 16.001 9.99928 16.5479 10 17.2227V22.7773C9.99929 23.4521 9.45259 23.999 8.7778 24L3.2222 24C2.54741 23.999 2.00071 23.4521 2 22.7773V17.2227Z" fill="var(--primary)"/>
								<path d="M20 0C16.6863 0 14 2.68629 14 6C14 9.31371 16.6863 12 20 12C23.3137 12 26 9.31371 26 6C25.9964 2.6878 23.3122 0.00363779 20 0ZM20 10C17.7909 10 16 8.20914 16 6C16 3.79086 17.7909 2 20 2C22.2091 2 24 3.79086 24 6C23.9977 8.20818 22.2082 9.99769 20 10Z" fill="var(--primary)"/>
								<path d="M17.2222 14C15.4432 14.0019 14.0017 15.4437 14 17.2227L14 22.7773C14.0017 24.5563 15.4432 25.9981 17.2222 26L22.7778 26C24.5568 25.9981 25.9984 24.5563 26 22.7773L26 17.2227C25.9983 15.4437 24.5568 14.0019 22.7778 14L17.2222 14ZM24 17.2227V22.7773C23.9993 23.4521 23.4526 23.999 22.7778 24L17.2222 24C16.5474 23.999 16.0007 23.4521 16 22.7773V17.2227C16.0007 16.5479 16.5474 16.001 17.2222 16H22.7778C23.4526 16.001 23.9993 16.5479 24 17.2227Z" fill="var(--primary)"/>
							</svg>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6">
				<div class="card">
					<div class="card-body d-flex justify-content-between">
						<div class="card-menu">
							<span>Total Revenue</span>
							<h2 class="mb-0"><?php echo number_format($totalAmount, 2); ?></h2>
						</div>
						
						<div class="icon-box icon-box-lg bg-primary-light">
							<svg width="26" height="30" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.45 29.3C10.0102 29.3093 11.5568 29.0088 13 28.416C14.4417 29.0138 15.9893 29.3145 17.55 29.3C22.2885 29.3 26 26.7715 26 23.5422V18.1577C26 14.9284 22.2885 12.4 17.55 12.4C17.3303 12.4 17.1145 12.4104 16.9 12.4221V6.33285C16.9 3.16995 13.1885 0.699951 8.45 0.699951C3.7115 0.699951 0 3.16995 0 6.33285V23.6671C0 26.83 3.7115 29.3 8.45 29.3ZM23.4 23.5422C23.4 25.0359 20.9976 26.7 17.55 26.7C14.1024 26.7 11.7 25.0359 11.7 23.5422V22.3398C13.4605 23.4105 15.4899 23.9566 17.55 23.9141C19.6101 23.9566 21.6395 23.4105 23.4 22.3398V23.5422ZM17.55 15C20.9976 15 23.4 16.664 23.4 18.1577C23.4 19.6514 20.9976 21.3141 17.55 21.3141C14.1024 21.3141 11.7 19.6501 11.7 18.1577C11.7 16.6653 14.1024 15 17.55 15ZM8.45 3.29995C11.8976 3.29995 14.3 4.89895 14.3 6.33285C14.3 7.76675 11.8976 9.36705 8.45 9.36705C5.0024 9.36705 2.6 7.76805 2.6 6.33285C2.6 4.89765 5.0024 3.29995 8.45 3.29995ZM2.6 10.4266C4.36783 11.4764 6.39439 12.0101 8.45 11.967C10.5056 12.0101 12.5322 11.4764 14.3 10.4266L14.3 12.8289C12.8832 13.186 11.5839 13.9061 10.53 14.918C9.84648 15.066 9.14934 15.1418 8.45 15.1443C5.0024 15.1443 2.6 13.5453 2.6 12.1114V10.4266ZM2.6 16.2051C4.3682 17.2539 6.39459 17.787 8.45 17.7443C8.6814 17.7443 8.905 17.7157 9.1325 17.704C9.11313 17.8545 9.10228 18.0059 9.1 18.1576V20.8682C8.8816 20.8812 8.671 20.9228 8.45 20.9228C5.0024 20.9228 2.6 19.3238 2.6 17.8886V16.2051ZM2.6 21.9823C4.36783 23.0321 6.39439 23.5658 8.45 23.5228C8.6684 23.5228 8.8829 23.5058 9.1 23.4955V23.5422C9.1186 24.6489 9.54387 25.71 10.2947 26.5232C9.68645 26.638 9.06899 26.6972 8.45 26.7C5.0024 26.7 2.6 25.101 2.6 23.6671V21.9823Z" fill="var(--primary)"/>
							</svg>
							
								
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6">
    <!-- Total Revenue Card HTML -->
</div>

<!-- Add the canvas element for the chart here -->
<div class="col-xl-6 custome-width">
    <canvas id="myChart"></canvas>
</div>
			<div class="col-xl-3 col-sm-6">
				
			</div>
			<div class="col-xl-6 custome-width">
				
			</div>
			<div class="col-xl-6 custome-width">
				
					
			</div>
			
			</div>
			<div class="col-xl-3">
			</div>	
			</div>
			<div class="col-xl-12">
				<div class="card">
					
					
				</div>		
				</div>
			</div>
		</div>
	</div>

</div>
<div class="modal fade" id="exampleModal1" tabindex="-1"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header ">
			<h5 class="modal-title">Add Customer</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="form-group">
				<label class="form-label">Seller Mobile Number</label>
				<input type="number" class="form-control mb-3" id="exampleInputEmail1"  placeholder="Number">
				<label class="form-label">Email</label>
				<input type="email" class="form-control mb-3" id="exampleInputEmail2"  placeholder=" Email">
				<label class="form-label">Amount</label>
				<input type="number" class="form-control mb-3" id="exampleInputEmail3"  placeholder="Amount">
				</div>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->
        <!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->        
		
	</div>
	         <script src="chart.js"></script>
			<script src="adm/public/assets/vendor/global/global.min.js"></script>
			<script src="adm/public/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
		

	        <script src="adm/public/assets/vendor/chart.js/Chart.bundle.min.js"></script>
            <script src="adm/public/assets/vendor/apexchart/apexchart.js"></script>
            <script src="adm/public/assets/js/dashboard/dashboard-1.js"></script>
            <script src="adm/public/assets/vendor/draggable/draggable.js"></script>
            <script src="adm/public/assets/vendor/swiper/js/swiper-bundle.min.js"></script>
            <script src="adm/public/assets/vendor/dotted-map/js/contrib/jquery.smallipop-0.3.0.min.js"></script>
            <script src="adm/public/assets/vendor/dotted-map/js/contrib/suntimes.js"></script>
            <script src="adm/public/assets/vendor/dotted-map/js/contrib/color-0.4.1.js"></script>
            <script src="adm/public/assets/vendor/dotted-map/js/world.js"></script>
            <script src="adm/public/assets/vendor/dotted-map/js/smallimap.js"></script>
            <script src="adm/public/assets/js/dashboard/dotted-map-init.js"></script>
            <script src="adm/public/assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
            <script src="adm/public/assets/vendor/jqvmap/js/jquery.vmap.world.js"></script>
            <script src="adm/public/assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    	
			<script src="adm/public/assets/js/custom.js"></script>
			<script src="adm/public/assets/js/deznav-init.js"></script>
			<script src="adm/public/assets/js/demo.js"></script>
			<script src="adm/public/assets/js/styleSwitcher.js"></script>
			 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
			 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

			
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

    
    



    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from salero.dexignzone.com/codeigniter/demo/index_2 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 12:59:27 GMT -->
</html>

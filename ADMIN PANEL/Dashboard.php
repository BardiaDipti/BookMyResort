<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:title" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<title>Dashboard</title>
	
	<link rel="shortcut icon" type="png" href="logo.png" />
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	
</head>
<body>
	<div id="main-wrapper">
		<div class="nav-header">
                    <a href="Dashboard.php" class="brand-logo"><img src="logo.png" width="90" height="90"/>
                        	<svg class="brand-title" xmlns="http://www.w3.org/2000/svg" width="143" height="46.359" viewBox="0 0 143 46.359">
				  <g id="Group_26" data-name="Group 26" transform="translate(-134 -40.641)">
					<text id="Hotel_Admin_Dashboard" data-name="Hotel Admin Dashboard" transform="translate(134 83)" fill="#5d5449" font-size="20" font-family="Forte" font-weight="300"><tspan x="0" y="0">Book My Resort</tspan></text>
                                   </g>
				</svg>
			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Dashboard
							</div>
						</div>
						<div class="nav-item d-flex align-items-center">
							<div class="input-group search-area">
								<input type="text" class="form-control" placeholder="Search here">
								<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
							</div>
						</div>
                                                <ul>
							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="pic1.jpg" width="20" alt=""/>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="Login.php" class="dropdown-item ai-icon">
										<svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<div class="dlabnav">
			<div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
						<ul aria-expanded="false">
                                                   <li><a href="Dashboard.php">Home</a></li>
		           <li><a href="Calendar.php">Calendar</a></li>	
						</ul>

					</li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-072-printer"></i>
							<span class="nav-text">Forms</span>
						</a>
						<ul aria-expanded="false">
                                                    <li><a href="Form_Customer.php">Customer</a></li>
                                                    <li><a href="Form_Category.php">Category</a></li>
                                                    <li><a href="Form_Booking.php">Booking</a></li>
                                                    <li><a href="Form_Foodorder.php">Food Order</a></li>
                                                    <li><a href="Form_Payment.php">Payment</a></li>
                                                    <li><a href="Form_Feedback.php">Feedback</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-043-menu"></i>
							<span class="nav-text">Tables</span>
						</a>
						<ul aria-expanded="false">
                                                    <li><a href="Table_Customer.php">Customer</a></li>
                                                    <li><a href="Table_Category.php">Category</a></li>
                                                    <li><a href="Table_Event.php">Event</a></li>
                                                    <li><a href="Table_Room.php">Room</a></li>
                                                    <li><a href="Table_Package.php">Package</a></li>
                                                    <li><a href="Table_Booking.php">Booking</a></li>
                                                    <li><a href="Table_Menu.php">Menu</a></li>
                                                    <li><a href="Table_Order.php">Order</a></li>
                                                    <li><a href="Table_Payment.php">Payment</a></li>
                                                    <li><a href="Table_Feedback.php">Feedback</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Page</span>
						</a>
						<ul aria-expanded="false">
                                                    <li><a href="Login.php">Login</a></li>
						</ul>
					</li>
				</ul>
				<div class="copyright">
					<p class="text-center"><strong>Book My Resort</strong>Copyright © 2022 All Rights Reserved</p>
				</div>
			</div>
		</div>
		<div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="row">
                                                                    <!--div class="col-xl-12">
                                                                        <div class="card">
                                                                            <h1 align="center">Welcome To Admin Panel!</h1>
                                                                        </div>
                                                                    </div-->
                                                                    <div class="col-xl-4 col-sm-6">
										<!--div class="row">
											<div class="col-xl-6">
                                                                         <div class="col-xl-12 col-sm-3"-->
										<div class="card booking">
											<div class="card-body">
												<div class="booking-status d-flex align-items-center">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="28" height="20" viewBox="0 0 28 20">
														  <path  d="M27,14V7a1,1,0,0,0-1-1H6A1,1,0,0,0,5,7v7a3,3,0,0,0-3,3v8a1,1,0,0,0,2,0V24H28v1a1,1,0,0,0,2,0V17A3,3,0,0,0,27,14ZM7,8H25v6H24V12a2,2,0,0,0-2-2H19a2,2,0,0,0-2,2v2H15V12a2,2,0,0,0-2-2H10a2,2,0,0,0-2,2v2H7Zm12,6V12h3v2Zm-9,0V12h3v2ZM4,17a1,1,0,0,1,1-1H27a1,1,0,0,1,1,1v5H4Z" transform="translate(-2 -6)" fill="var(--primary)"/>
														</svg>
													</span>
													<div class="ms-4">
														<h2 class="mb-0 font-w600">30</h2>
														<p class="mb-0 text-nowrap ">New Booking</p>
													</div>
												</div>
											</div>
										</div>
                                                                         </div>
                                                                         <div class="col-xl-4 col-sm-6">
										<div class="card booking">
											<div class="card-body">
												<div class="booking-status d-flex align-items-center">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
														  <path  data-name="Path 1957" d="M129.035,178.842v2.8a5.6,5.6,0,0,0,5.6,5.6h14a5.6,5.6,0,0,0,5.6-5.6v-16.8a5.6,5.6,0,0,0-5.6-5.6h-14a5.6,5.6,0,0,0-5.6,5.6v2.8a1.4,1.4,0,0,0,2.8,0v-2.8a2.8,2.8,0,0,1,2.8-2.8h14a2.8,2.8,0,0,1,2.8,2.8v16.8a2.8,2.8,0,0,1-2.8,2.8h-14a2.8,2.8,0,0,1-2.8-2.8v-2.8a1.4,1.4,0,0,0-2.8,0Zm10.62-7-1.81-1.809a1.4,1.4,0,1,1,1.98-1.981l4.2,4.2a1.4,1.4,0,0,1,0,1.981l-4.2,4.2a1.4,1.4,0,1,1-1.98-1.981l1.81-1.81h-12.02a1.4,1.4,0,1,1,0-2.8Z" transform="translate(-126.235 -159.242)" fill="var(--primary)" fill-rule="evenodd"/>
														</svg>
													</span>
													<div class="ms-4">
														<h2 class="mb-0 font-w600">15</h2>
                                                                                                                <p class="mb-0">Check In</p>
													</div>
												</div>
											</div>
										</div>
                                                                         </div> 
									<div class="col-xl-4 col-sm-6">
										<div class="card booking">
											<div class="card-body">
												<div class="booking-status d-flex align-items-center">
													<span>
														<svg id="_009-log-out" data-name="009-log-out" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
														  <path  data-name="Path 1957" d="M151.435,178.842v2.8a5.6,5.6,0,0,1-5.6,5.6h-14a5.6,5.6,0,0,1-5.6-5.6v-16.8a5.6,5.6,0,0,1,5.6-5.6h14a5.6,5.6,0,0,1,5.6,5.6v2.8a1.4,1.4,0,0,1-2.8,0v-2.8a2.8,2.8,0,0,0-2.8-2.8h-14a2.8,2.8,0,0,0-2.8,2.8v16.8a2.8,2.8,0,0,0,2.8,2.8h14a2.8,2.8,0,0,0,2.8-2.8v-2.8a1.4,1.4,0,0,1,2.8,0Zm-10.62-7,1.81-1.809a1.4,1.4,0,1,0-1.98-1.981l-4.2,4.2a1.4,1.4,0,0,0,0,1.981l4.2,4.2a1.4,1.4,0,1,0,1.98-1.981l-1.81-1.81h12.02a1.4,1.4,0,1,0,0-2.8Z" transform="translate(-126.235 -159.242)" fill="var(--primary)" fill-rule="evenodd"/>
														</svg>

													</span>
													<div class="ms-4">
														<h2 class="mb-0 font-w600">15</h2>
														<p class="mb-0">Check Out</p>
													</div>
												</div>
											</div>
										</div>
									</div>     
								</div>
							</div>
						</div>
					</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="fs-20">Customer Feedbacks</h4>
									</div>
									<div class="card-body pt-0">
										<div class="front-view-slider owl-carousel owl-carousel owl-loaded owl-drag owl-dot">
											<div class="items">
												<div class="customers border">
													<p class="fs-16">My mother and I were spending a couple of days celebrating her 80th birthday and it was wonderful. We made special memories as always, thank you so much. It was a beautiful environment for both work and vacation... the resort, and people made it really special.</p>
													<div class="d-flex justify-content-between align-items-center mt-4">
														<div class="customer-profile d-flex ">
														<img src="images/users/1.jpg" alt="">
														<div class="ms-3">
															<h5 class="mb-0"><a href="javascript:void(0);">Shubham Prajapati</a></h5>
															<span>10m ago</span>
														</div>
														</div>
														<div class="customer-button text-nowrap">
															<a href="javascript:void(0);"><i class="far fa-check-circle text-success"></i></a>
															<a href="javascript:void(0);"><i class="far fa-times-circle text-danger"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="items">
												<div class="customers border">
													<p class="fs-16">The ambience and facilities of the resort were perfect for all age groups. Food selection and quality was highly appreciated. The staff was one of best part of staying at the resort. Everyone was very thoughtful and caring to insure that you have enjoyed your stay.</p>
													<div class="d-flex justify-content-between align-items-center mt-4">
														<div class="customer-profile d-flex ">
														<img src="images/users/2.jpg" alt="">
														<div class="ms-3">
															<h5 class="mb-0"><a href="javascript:void(0);">Dharmesh Patel</a></h5>
															<span>7m ago</span>
														</div>
														</div>
														<div class="customer-button text-nowrap">
															<a href="javascript:void(0);"><i class="far fa-check-circle text-success"></i></a>
															<a href="javascript:void(0);"><i class="far fa-times-circle text-danger"></i></a>
														</div>
													</div>
												</div>
											</div>
											<div class="items">
												<div class="customers border">
													<p class="fs-16">Ocean front, gorgeous pool areas, beautiful bar and restaurant, excellent service with museum, very well appointed rooms. The only thing I could think was that people were trying to keep this resort a secret. We stayed in an suite, that was very large, homely and comfortable.</p>
													<div class="d-flex justify-content-between align-items-center mt-4">
														<div class="customer-profile d-flex ">
														<img src="images/users/3.jpg" alt="">
														<div class="ms-3">
															<h5 class="mb-0"><a href="javascript:void(0);">Sanjana Kapoor</a></h5>
															<span>5m ago</span>
														</div>
														</div>
														<div class="customer-button text-nowrap">
															<a href="javascript:void(0);"><i class="far fa-check-circle text-success"></i></a>
															<a href="javascript:void(0);"><i class="far fa-times-circle text-danger"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
            </div>
        </div>
    
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendor/apexchart/apexchart.js"></script>
	<script src="js/dashboard/dashboard-1.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>
	<script>
		function TravlCarousel()
			{

				/*  testimonial one function by = owl.carousel.js */
				jQuery('.front-view-slider').owlCarousel({
					loop:false,
					margin:15,
					nav:true,
					autoplaySpeed: 3000,
					navSpeed: 3000,
					paginationSpeed: 3000,
					slideSpeed: 3000,
					smartSpeed: 3000,
					autoplay: false,
					animateOut: 'fadeOut',
					dots:true,
					navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
					responsive:{
						0:{
							items:1
						},
						
						768:{
							items:2
						},			
						
						1400:{
							items:2
						},
						1600:{
							items:3
						},
						1750:{
							items:3
						}
					}
				})
			}

			jQuery(window).on('load',function(){
				setTimeout(function(){
					TravlCarousel();
				}, 1000); 
			});
	</script>
	<script>
		$(function () {
			$('#datetimepicker').datetimepicker({
				inline: true,
			});
		});
		
		$(document).ready(function(){
			$(".booking-calender .fa.fa-clock-o").removeClass(this);
			$(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
		});
	</script>

</body>
</html>
<?php
require 'Database/connection.php';
$msg = "";

if ($_POST) 
{
    $details = mysqli_real_escape_string($connection, $_POST['details']);
    $date = mysqli_real_escape_string($connection, $_POST['date']);
    $custid = mysqli_real_escape_string($connection, $_POST['custid']);
    $catid = mysqli_real_escape_string($connection, $_POST['catid']);

    $query = mysqli_query($connection, "Insert into booking_tbl(booking_details, booking_date, cust_id, category_id) values( '{$details}', '{$date}', '{$custid}', '{$catid}')") or die(mysqli_error($connection));

    if ($query) 
    {
        $msg = '<div class="alert alert-success" role="alert">Insertion Successful!</div>';
    }
}
?>

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

        <title>Booking Form</title>

        <link rel="shortcut icon" type="png" href="logo.png" />
        <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
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
                                Booking Form
                            </div>
                        </div>
						<div class="nav-item d-flex align-items-center">
							<div class="input-group search-area">
								<input type="text" class="form-control" placeholder="Search here">
								<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
							</div>
						</div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="images/profile/pic1.jpg" width="20" alt=""/>
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
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                               <?php
                                        echo $msg;
                               ?>
                                <!--<div class="card-header">
                                <h4 class="card-title">Booking Form</h4>
                           </div>-->
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form id="myform" method="post" enctype="multipart/form-data">
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Details</label>
                                                <select class="form-control form-white" name="details" required>
                                                    <option selected disabled>Select Here</option>;
                                                    <option>Event</option>
                                                    <option>Room</option>
                                                    <option>Package</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Date</label>
                                                <div class="col-sm-9">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           <input type="datetime-local" name="txtDate" id="txtDate" class="form-control" required>
<script>
    $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    // alert(maxDate);
    $('#txtDate').attr('min', maxDate);
});
</script>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Customer ID</label>
                                                <div class="col-sm-9">
                                                    <?php 
                                                    
                                                    $q = mysqli_query($connection, "select * from customer_tbl") or die(mysqli_error($connection));
                                              
                                                    echo "<select name='custid' class='form-control' required>";
                                                    echo "<option selected disabled>Select Here</option>";
                                                    while($data = mysqli_fetch_array($q)){
                                                        echo "<option value='{$data['cust_id']}'>{$data['cust_fname']}</option>";
                                                    }
                                                    echo "</select>";
                                                    
                                                    ?>
                                                
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Category ID</label>
                                                <div class="col-sm-9">
                                                    <?php 
                                                    
                                                    $q = mysqli_query($connection, "select * from category_tbl") or die(mysqli_error($connection));
                                              
                                                    echo "<select name='catid' class='form-control' required>";
                                                   
                                                    echo "<option selected disabled>Select Here</option>";
                                                    while($data = mysqli_fetch_array($q)){
                                                        echo "<option value='{$data['category_id']}'>{$data['category_type']}</option>";
                                                    }
                                                    echo "</select>";
                                                    
                                                    ?>
                                                
                                               </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </div>
                                            </div>
                                        </form>
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
        <script src="js/custom.min.js"></script>
        <script src="js/dlabnav-init.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/styleSwitcher.js"></script>
        <!-- Validation -->
        <script src="tools/jquery.validate.min.js" type="text/javascript"></script>
        <script>
$(document).ready(function () {
    $("#myform").validate();
})
        </script>
        <style>
            .error{
                color:red;
            }
        </style>
    </body>
</html>
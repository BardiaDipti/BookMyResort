<?php 
require 'session-start.php';
require 'session-check.php';
require 'Database/connection.php';
require 'session-check.php';
if(isset($_POST["submit"]))
{
    
    $booking_name=mysqli_real_escape_string($connection, $_POST["booking_name"]);
    $booking_date=mysqli_real_escape_string($connection, $_POST["booking_date"]);
    $booking_time=mysqli_real_escape_string($connection, date("H:i:s",strtotime($_POST["booking_time"])));
    $book_datetime =$booking_date." ".$booking_time;
    $book_amount=mysqli_real_escape_string($connection, $_POST["book_amount"]);
    $f_name=mysqli_real_escape_string($connection, $_POST["f_name"]);
    $l_name=mysqli_real_escape_string($connection, $_POST["l_name"]);
    $package_id=mysqli_real_escape_string($connection, $_POST["package_id"]);
   
    $category_id="3";
    $booking_details="Package";
    
    
    $query_ins = mysqli_query($connection,"INSERT INTO `booking_tbl`(`booking_name`, `booking_details`, `booking_date`, `cust_id`, `category_id`, `package_id`, `f_name`, `l_name`, `book_amount`) VALUES ('{$booking_name}','{$booking_details}','{$book_datetime}','{$cust_id}','{$category_id}','{$package_id}','{$f_name}','{$l_name}','{$book_amount}')");
    if($query_ins)
    {
        echo "<script>alert('Your booking successfully added');window.location='package-booking-list.php';</script>";
    }
    exit();
}
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
}
else{
    $id="";
}
$query_1 = mysqli_query($connection,"SELECT * FROM `package_tbl` WHERE `package_id`='{$id}'");
$count=mysqli_num_rows($query_1);
if($count==0)
{
    header("location:package-list.php");
    exit();
}
$data_1=mysqli_fetch_array($query_1);
$query_customer = mysqli_query($connection,"SELECT * FROM `customer_tbl` where cust_id='{$cust_id}'");
$data_cus = mysqli_fetch_array($query_customer);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="vendors/imagelightbox/imagelightbox.min.css">
    <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png">
   <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
 </head>
  <body>
       <?php
        include 'sidebar.php';
        include 'header.php';
      ?>
    <section class="row final-inner-header">
      <div class="container">
        <h2 class="this-title">Booking</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li class="active">Booking</li>
        </ol>
      </div>
    </section>
   <section class="container clearfix common-pad-inner booknow">
      <div class="sec-header">
          <h2>Booking</h2><br>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
          <div class="book-left-content input_form">
              <form id="contactBooking" action="package-booking.php" method="post">
              <div class="row">
                  <input type="hidden" name="package_id" value="<?php echo $data_1["package_id"];?>">
                   <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                         <input id="name" type="text" name="booking_name" value="<?php echo $data_1["package_title"];?>"  placeholder="Enter Name" class="form-control" required readonly="">
                </div> 
                     <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                    <input id="name" type="text" name="book_amount" value="<?php echo $data_1["package_price"];?>"  placeholder="Enter Price" class="form-control" required readonly="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                    <input id="name" type="text" name="f_name" value="<?php echo $data_cus["cust_fname"];?>"  placeholder="Enter First Name" class="form-control" required>
                </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                    <input id="name" type="text" name="l_name" value="<?php echo $data_cus["cust_lname"];?>" placeholder="Enter Last Name" class="form-control" required>
                </div>
<!--                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                    <input id="text" type="number" min="0" name="category" placeholder="Enter Mobile" class="form-control" required>
                </div>-->
                    
                  <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                    <input type="date" name="booking_date"  class="form-control" required>
                </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                    <input type="time" name="booking_time" class="form-control" required>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button type="submit" name="submit" class="res-btn">Submit Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-4 pull-right">
          <div class="book-right"><span><img src="images/booking/1.jpg" alt=""></span>
            <h2>About Resort</h2>
            <p>Simply furnished rooms with a warm vibe feature flat-screen TVs, minifridges, free Wi-Fi, and tea and coffeemaking facilities. Some have pool views. Suites add separate living rooms and/or whirlpool baths. Room service is available 24/7.</p>
          </div>
        </div>
      </div>
    </section>
    <?php
include 'footer.php';
?>

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script src="vendors/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/zebra_datepicker.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/email.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- Validation -->
        <script type="text/javascript" src="tools/jquery-3.6.0.min.js"></script>
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
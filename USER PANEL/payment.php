<?php 
require 'session-start.php';
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
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
        <h2 class="this-title">Payment</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
            <li><a href="home.php">Home</a></li>
          <li class="active"> Payment</li>
        </ol>
      </div>
    </section>
      <section class="container clearfix common-pad-inner about-info-box">
      <div class="row">
       <!-- <div class="col-lg-2 col-md-2 col-xs-2">-->
          <div class="sec-header3">
            <h1 align="left">Payment</h1>
      </div>
    </section>
   <div class="card-body">
                                    <div class="basic-form">
                                        <form id="myform" method="post" enctype="multipart/form-data">
                                            <div class="mb-1 row">
                                                <label class="col-sm-3 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment Mode</label>
                                                <div class="col-sm-6">
                                                <select class="form-control form-white" name="mode" placeholder="Choose one" required>
                                                    <option></option>
                                                    <option>Credit Card</option>
                                                    <option>Debit Card</option>
                                                    <option>UPI</option>
                                                    <option>Net banking</option>
                                                </select> <br>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment Date</label>
                                                <div class="col-sm-6">
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
                                            </div><br>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment Details</label>
                                                <div class="col-sm-6">
                                                    <input required type="text" pattern="[A-Za-z]{1,32}" class="form-control" name="details" placeholder="Enter your payment details">
                                                </div>
                                            </div><br>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payment Status</label>
                                                <div class="col-sm-6">
                                                <select class="form-control form-white" name="status" placeholder="Choose one" required>
                                                    <option></option>
                                                    <option>Successful</option>
                                                    <option>Unsuccessful</option>
                                                </select>
                                                </div>
                                            </div><br>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer ID</label>
                                                <div class="col-sm-6">
                                                    <input required type="number" class="form-control" name="custid" placeholder="Enter your customer id">
                                                </div>
                                            </div><br>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Booking ID</label>
                                                <div class="col-sm-6">
                                                    <input required type="number" class="form-control" name="bookingid" placeholder="Enter your booking id">
                                                </div>
                                            </div><br>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order No</label>
                                                <div class="col-sm-6">
                                                    <input required type="number" class="form-control" name="orderno" placeholder="Enter your order no">
                                                </div>
                                            </div><br>
                                            <div class="mb-3 row">
                                                <div class="col-sm-10">
                                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="submit" class="btn btn-success">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                   <button type="reset" class="btn btn-danger">Reset</button><br><br>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
      <?php
include 'footer.php';
?>
<script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script src="vendors/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/zebra_datepicker.js"></script>
   <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/custom.js"></script>
    
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
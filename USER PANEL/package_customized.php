<?php 
require 'session-start.php';
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Customized Packages</title>
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
        <h2 class="this-title">Packages</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li class="active">Customized Packages</li>
        </ol>
      </div>
    </section>
   <section class="container clearfix common-pad-inner about-info-box">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="sec-header3">
            <h2>Customized Packages</h2>
            <h3>Customize your package as per your preference</h3>
     </div>
    </section>
   <section class="clearfix news-wrapper">
      <div class="container clearfix common-pad-room">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="room-wrapper">
              <div class="media">
                  <div class="media-left"><a href="#"><img src="img/custom.jfif" height="300" width="400"></a></div>
                <div class="media-body">
                  <h2>Wildlife Package</h2>
                  <p> 4 nights/5 days stay in deluxe room with complimentary breakfast & camping with bonfire.</p>
               </div>
                <div class="media-right">
                  <p>₹25000</p><a href="single-room.php" >view package</a>
                </div>
              </div>
            </div>
          <div class="room-wrapper">
              <div class="media">
                  <div class="media-left"><a href="#"><img src="img/default2.jpg" height="300" width="400"></a></div>
                <div class="media-body">
                  <h2>Wellness Package</h2>
                  <p>3 nights/4 days stay in villa with complimentary breakfast, spa & gym.</p>
               </div>
                <div class="media-right">
                  <p>₹40000</p><a href="single-room.php">view package</a>
                </div>
              </div>
            </div>
           <div class="room-wrapper">
              <div class="media">
                  <div class="media-left"><a href="#"><img src="img/package1.gif" height="300" width="400"></a></div>
                <div class="media-body">
                  <h2>Adventure Package</h2>
                  <p>5 nights/6 days stay in super deluxe room with complimentary breakfast and dinner, sports activities.</p>
               </div>
                <div class="media-right">
                  <p>₹30000</p><a href="single-room.php">view package</a>
                </div>
              </div>
            </div>
         </div>
        </div>
      </div>
    </section>
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
  </body>
</html>
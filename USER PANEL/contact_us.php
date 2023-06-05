<?php 
require 'session-start.php';
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
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
    <link rel="icon" type="png" sizes="16x16" href="logo.png">
   <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
  </head>
  <body>
      <?php
        include 'sidebar.php';
        include 'header.php';
      ?>
    <section class="row final-inner-header">
      <div class="container">
        <h2 class="this-title">Contact us</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index-2.html">Home</a></li>
          <li class="active">Contact us</li>
        </ol>
      </div>
    </section>
    <section class="container clearfix common-pad booknow">
     <div class="row nasir-contact">
       
          <div class="contact-info">
            <h2>Contact Info</h2>
            <div class="media-contact clearfix">
              <div class="media-contact-icon"><i aria-hidden="true" class="fa fa-map-marker"></i></div>
              <div class="media-contact-info">
                <p>Book My Resort,<br>63, Near Kodiyat Forest Chowki, Ahmedabad </p>
              </div>
            </div>
            <div class="media-contact clearfix">
              <div class="media-contact-icon"><i aria-hidden="true" class="fa fa-envelope-o"></i></div>
              <div class="media-contact-info">
                  <p> <a href="bookmyresort04@gmail.com">bookmyresort04@gmail.com</a><br><a href="info@bookmyresort.com">info@bookmyresort.com</a></p>
              </div>
            </div>
            <div class="media-contact clearfix">
              <div class="media-contact-icon"><i aria-hidden="true" class="icon icon-Timer"></i></div>
              <div class="media-contact-info">
                <p>Monday to Friday : 8:00am to 5:00pm<br>                                  Saturday : 8:00am to 3:00pm<br>                                  Sunday : <span>Closed</span></p>
              </div>
            </div>
            <div class="media-contact clearfix">
              <div class="media-contact-icon"><i aria-hidden="true" class="fa fa-phone"></i></div>
              <div class="media-contact-info">
                <p><a href="tel:(+91) 9323475845"><i>(+91) 9323475845</i></a><br><a href="tel:(+91) 9323475844"><i>(+91) 9323475844</i></a></p>
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
    <script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/contact.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/map.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
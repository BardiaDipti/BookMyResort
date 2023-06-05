<?php 
require 'session-start.php';
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Amenities</title>
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
        <h2 class="this-title">Resort Amenities</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
            <li><a href="home.php">Home</a></li>
          <li class="active">Resort Amenities</li>
        </ol>
      </div>
    </section>
    <section class="container clearfix common-pad-inner about-info-box">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="sec-header">
            <h2>Resort Amenities</h2>
            <h3>Pick a preference</h3>
          </div>
          <p>We provide various facilities like gym, restaurant, rooms & packages, events, spa and salon, sports club, swimming pool, museum etc..Our resort is a luxurious resort with contemporary rooms and facilities. The airport and the railway station are in close proximity to the resort Breakfast is complimentary. Additional amenities include an international restaurant, a cafe with rustic wood furnishings, and an outdoor pool.</p>
       </div>
      </div>
    </section>
    <section class="clearfix news-wrapper">
      <div class="container clearfix common-pad-room">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 aminities-wrapper">
            <div class="sec-header-small">
              <h2>Room Amenities</h2>
            </div>
           <div class="aminities-outer">
              <ul>
                <li>
                  <div class="view view-aminities"><img src="img/Gym1.jpg" height="200" width="250">
                    <h2>Gym</h2>
                   <div class="mask">
                      <h2>Gym</h2>
                   </div>
                  </div>
                </li>
                <li>
                  <div class="view view-aminities"><img src="img/wifi.jpg" height="200" width="250">
                    <h2>Free Wi-Fi</h2>
                   <div class="mask">
                      <h2>Free Wi-Fi</h2>
                   </div>
                  </div>
                </li>
                <li>
                    <div class="view view-aminities"><img src="img/swimming-pool.jpg" height="200" width="250" >
                    <h2>Swimming Pool</h2>
                   <div class="mask"> 
                      <h2>Swimming Pool</h2>
                   </div>
                  </div>
                </li>
                <li>
                  <div class="view view-aminities"><img src="img/spa.jfif" height="200" width="250" >
                    <h2>Spa</h2>
                   <div class="mask">
                      <h2>Spa</h2>
                   </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="aminities-outer">
              <ul>
                <li>
                    <div class="view view-aminities"><img src="img/jacuzzi.jfif" height="200" width="250"  >
                    <h2>Jacuzzi</h2>
                   <div class="mask">
                      <h2>Jacuzzi</h2>
                    </div>
                  </div>
                </li>
                <li>
                    <div class="view view-aminities"><img src="img/sports.jpg" height="200" width="250">
                    <h2>Sports Club</h2>
                   <div class="mask">
                      <h2>Sports Club</h2>
                    </div>
                  </div>
                </li>
                <li>
                    <div class="view view-aminities"><img src="img/Restaurant.jpg" height="200" width="250">
                    <h2>Restaurant</h2>
                   <div class="mask">
                      <h2>Restaurant</h2>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="view view-aminities"><img src="img/gallery.jpg"height="200" width="250">
                    <h2>Museum </h2>
                    <div class="mask">
                      <h2>Museum </h2>
                   </div>
                  </div>
                </li>
              </ul>
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
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <script src="js/custom.js"></script>
  </body>


</html>
<?php
require 'session-start.php';
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
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
        <h2 class="this-title"> Restaurant</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index-2.html">Home</a></li>
          <li class="active"> Restaurant</li>
        </ol>
      </div>
    </section>
   <section class="container clearfix common-pad-inner about-info-box">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="sec-header3">
            <h2>Restaurant</h2>
            <h3>Pick a dish that best suits your taste and budget</h3>
          </div>
       </div>
      </div>
      <div class="row rest-pad">
        <div class="col-lg-5 col-md-6 col-xs-12">
          <div class="rest-content">
          <p>Have an amazing dine-in experience at our restaurant in Ahmedabad that is surrounded by picturesque beauty.We serve you mouth-watering dishes. The grand setup of restaurant will make you feel royal. Our restaurant is well equipped to prepare meals without the use of onion and garlic to cater to the needs of visiting Jain community members Enjoy a range of spirits and cocktails with lip-smacking snacks </p>
            <ul>
                <li>Sumptuous Indian and Continental meals</li><br>
                <li>Veg and jain food</li><br>
                <li>Breakfast, lunch, dinner </li><br>
              <li>Well-trained staff to attend customer needs</li>
              <li>Can accommodate special dietary requests</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-7 col-md-6 col-xs-12"><img src="images/restaurant/1.jpg" alt="" class="img-responsive"></div>
      </div>
    </section>
  <section class="our-special-wrapper">
      <section class="container clearfix common-pad">
        <div class="sec-header3">
          <h2>Special Dinning</h2>
          <h3>Pick a dish that best suits your taste and budget</h3>
        </div>
        <p>The food and drinks have been carefully handpicked to mirror, the newer trends in the changing tastes of modern clientele. Our restaurant is the perfect place to enjoy a swell dining experience with friends and family. The menus keep changing in accordance with seasons.</p>
        <div class="row">
          <div class="our-spec-outer">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
             <div class="item"><img src="images/restaurant/2.jpg" alt="" class="img-responsive">
                 <h2>Coffee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹250 </h2> 
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="item"><img src="images/restaurant/3.jpg" alt="" class="img-responsive">
                <h2>Pizza &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹400 </h2>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item"><img src="img/dalmakhani.gif" class="img-responsive" height="170">
               <h2>Dal Makhani&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹230</h2>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item"><img src="img/sandwich1.cms" height="200" class="img-responsive">
                <h2>Sandwich&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹120</h2>
             </div>
            </div>
           <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item"><img src="img/sizzlers.jpg"  class="img-responsive">
                 <h2>Sizzlers &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹390 </h2> 
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item"><img src="img/icecream1.jpg"  class="img-responsive">
                 <h2>Ice Cream&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹220 </h2> 
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item"><img src="img/chocolava.jpg" class="img-responsive">
                 <h2>Choco Lava Cake&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹190 </h2> 
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="item"><img src="img/vegbriyani.jpg" alt="" class="img-responsive">
                 <h2>Veg Briyani&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹450 </h2> 
              </div>
            </div>-->
          </div>
        </div>
      </section>
    </section>
   <section class="our-table-wrapper">
      <div class="our-menu-wrapper container clearfix common-pad">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="our-table-cont">
              <h2>Reserve a table</h2>
              <p>Book your favourite table at our restaurant in a minute. If you’re our guest, you won’t spend more than a minute for your booking.</p>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
            <div class="table-form input_form">
              <form id="myform" action="http://designarc.biz/demos/lakecious/contact_process.php" method="post">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
            <input type="text" name="txtDate" id="txtDate" placeholder="Arrival Date" class="form-control" onfocus="(this.type='datetime-local')" required> 
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input id="room" type="text" name="room" placeholder="Room No." class="form-control" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input id="yname" type="text" name="yname" placeholder="Your name" class="form-control" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input id="table" type="text" name="table" placeholder="Number of person on table" class="form-control" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button type="submit" class="res-btn">Book now</button>
                </div>
              </form>
              <div id="success">
                <p>Your message sent successfully.</p>
              </div>
              <div id="error">
                <p>Something is wrong. Message cant be sent!</p>
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
   <script src="js/jquery.mixitup.min.js"></script>
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
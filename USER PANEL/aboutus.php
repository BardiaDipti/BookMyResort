<?php
require 'session-start.php';
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="UTF-8">
    <title>About Us</title>
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
  
  <body  class="vh-100">
    <?php
include 'sidebar.php';
include 'header.php';
?>
    <!-- Header  Slider style-->
    <!-- Header  Inner style-->
    <section class="row final-inner-header">
      <div class="container">
        <h2 class="this-title">About Us</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li class="active">About Us</li>
        </ol>
      </div>
    </section>
    <section class="container clearfix common-pad about-info-box">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <div class="sec-header3">
            <h2>About Resort</h2>
            <h3>Pick a preference as per your taste and budget</h3>
          </div>
          <p>Our resort is one of the best resort in Ahmedabad which provides range of rooms & packages with memorable stays & events.</p>
          <h6>Centrally located in Ahmedabad, Our resort is a premium property offering a refreshing stay experience with its excellent services, facilities and awesome ambience.</h6>
      
        </div>
        <div class="col-sm-4 hidden-xs">
          <div class="img-cap-effect">
              <div class="img-box"><img src="images/about/1.jpg" height="300">
              <div class="img-caption"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="clearfix news-wrapper">
      <div class="container clearfix common-pad">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12 our-resort-value hidden-xs">
            <div class="img-l-box"><img src="images/our-resort-values/1.jpg" alt=""></div>
            <div class="img-r-box">
              <div class="img-box1"><img src="images/our-resort-values/2.jpg" alt=""></div>
              <div class="img-box2"><img src="images/our-resort-values/3.jpg" alt=""></div>
            </div>
          </div>
             <div class="col-lg-6 col-md-6 col-xs-12 our-resort-value hidden-xs">
            <div class="img-l-box"><img src="img/packages.png" height="435" width="280"></div>
            <div class="img-r-box">
                <div class="img-box1"><img src="img/sunset.jfif" height="435" width="280"></div>
           </div>
             </div>
      </div>
    </section>
    <section class="take-a-tour-video-box">
      <div class="check-video-box">
        <div class="img-holder"><img src="images/about/video-overlay.jpg" alt="">
          <div class="content">
            <div class="content-inner">
              <div class="box">
                <h3>Take a Tour</h3><a href="images/about/video1.jpg" class="fancybox"><i class="icon icon-Play"></i></a>
                <h4>0f our wounderfull resort</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container clearfix common-pad testimonials-sec">
      <div class="sec-header">
          <h2>Feedbacks & Ratings</h2>
          <section class="container clearfix footer-b-pad">
          <div class="pull-left fo-txt"></div>
          </section>
     </div>
      <div class="testimonials-wrapper">
        <div class="testimonial-sliders">
          <div class="item">
            <div class="test-cont">
              <p>One of the best resorts in Ahmedabad. The rooms are very spacious and beautiful. Every room has got amazing view. It has an amazing pool. Sitting by the pool during early morning and also during night is an amazing feeling in itself.</p>
            </div>
            <div class="test-bot">
              <div class="tst-img"><img src="images/testimonials/1.png" alt="" class="img-responsive"></div>
              <div class="client_name">
                <h5><a href="testimonials.html">Monica Jain</a></h5>
                <ul>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="test-cont">
              <p>The lighting arrangements done at the night is just simply beautiful. It looks as if you are staying in a palace. One good advantage is also its proximity to many of the places. If you are planning for a luxurious vacation, do consider this resort in Ahmedabad.</p>
            </div>
            <div class="test-bot">
              <div class="tst-img"><img src="images/testimonials/2.png" alt="" class="img-responsive"></div>
              <div class="client_name">
                <h5><a href="feedback.php">Parul Mehta </a></h5>
                <ul>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="test-cont">
              <p>My mother and I were spending a couple of days celebrating her 80th birthday and it was wonderful. We made special memories as always, thank you so much. It was a beautiful environment for both work and vacation... the resort, and people made it really special..</p>
            </div>
            <div class="test-bot">
              <div class="tst-img"><img src="images/testimonials/3.png" alt="" class="img-responsive"></div>
              <div class="client_name">
                <h5><a href="feedback.php">Dharmesh Patel</a></h5>
                <ul>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="test-cont">
              <p>The ambience and facilities of the resort were perfect for all age groups. Food selection and quality was highly appreciated. The staff was one of best part of staying at the resort. Everyone was very thoughtful and caring to insure that you have enjoyed your stay.</p>
            </div>
            <div class="test-bot">
              <div class="tst-img"><img src="images/testimonials/4.png" alt="" class="img-responsive"></div>
              <div class="client_name">
                <h5><a href="feedback.php">Sanjana Kapoor</a></h5>
                <ul>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="test-cont">
              <p>Ocean front, gorgeous pool areas, beautiful bar and restaurant, excellent service with museum, very well appointed rooms. The only thing I could think was that people were trying to keep this resort a secret. We stayed in an suite, that was very large, homely and comfortable.</p>
            </div>
            <div class="test-bot">
              <div class="tst-img"><img src="images/testimonials/5.png" alt="" class="img-responsive"></div>
              <div class="client_name">
                <h5><a href="feedback.php"> Suresh Sharma </a></h5>
                <ul>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                  <li><a href="#"><i class="fa fa-star"></i></a></li>
                </ul>
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
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
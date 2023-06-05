<?php 
require 'session-start.php';
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
  
    <head>
    <meta charset="UTF-8">
    <title>Home</title>
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
      
      <div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel default-home-slider slide carousel-fade shop-slider">
     <div role="listbox" class="carousel-inner">
        <div style="background-image: url(images/slider/10.jpg);backgroudn-position: center right;" class="item active slide-1">
          <div class="carousel-caption nhs-caption nhs-caption6">
            <div class="thm-container">
              <div class="box valign-middle">
                <div class="content text-center">
                  <h2 data-animation="animated fadeInUp" class="this-title">Spend Your Dream Holidays</h2>
                  <p data-animation="animated fadeInDown">Book a room at our resort. Coffee set, soft drinks and a huge cozy bed are waiting for you. We will do everything to make you feel friendly.</p><a data-animation="animated fadeInLeft" ></a><a data-animation="animated fadeInRight"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image: url(images/slider/11.jpg);backgroudn-position: center right;" class="item slide-2">
          <div class="carousel-caption nhs-caption nhs-caption7">
            <div class="thm-container">
              <div class="box valign-middle">
                <div class="content text-left pull-left">
                  <h2 data-animation="animated fadeInUp" class="this-title">The Best Place to Relax</h2>
                  <p data-animation="animated fadeInDown">A beautiful and well maintained resort with good food, staff and open spaces....</p><a data-animation="animated fadeInLeft"></a><a data-animation="animated fadeInRight"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image: url(images/slider/12.jpg);backgroudn-position: center right;" class="item slide-2">
          <div class="carousel-caption nhs-caption nhs-caption8">
            <div class="thm-container">
              <div class="box valign-middle">
                <div class="content text-center">
                  <h2 data-animation="animated fadeInUp" class="this-title">We offer you the best</h2>
                  <h2 data-animation="animated fadeInUp" class="this-title">luxury resort with an impressive history</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>
<!--    <div class="search-wrapper">
      <section class="container clearfix">
        <div class="search-sec search-sec-homet">
          <div class="overlay">
            <div class="border">
              <div class="ser-in-box">
                <input placeholder="Arival Date" type="text" class="form-control datepicker-example8">
              </div>
              <div class="ser-in-box">
                <input type="text" placeholder="Departure Date" class="form-control datepicker-example8">
              </div>
              <div class="ser-in-box">
                <div class="select-box">
                  <select name="selectMenu" class="select-menu form-control">
                    <option value="default">Adults</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
              <div class="ser-in-box">
                <div class="select-box">
                  <select name="selectMenu" class="select-menu form-control">
                    <option value="default">Children</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
              <div class="ser-in-box chk-button">
                <button type="submit" class="res-btn">Check Availability</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>-->
    
   <div class="resot-activities clearfix">
      <div class="container clearfix common-pad">
        <div class="row">
          <div class="col-lg-6 col-md-6 activities-cont">
            <div class="sec-header3">
              <h2>Amenities of Resort</h2>
              <h3>Pick a preference</h3>
            </div>
            <p>Simply furnished rooms with a warm vibe feature flat-screen TVs, minifridges, free Wi-Fi, and tea and coffee making facilities. Some have pool views. Suites add separate living rooms and/or whirlpool baths. Room service is available 24/7.</p>
            <p>Breakfast is complimentary. Additional amenities include an international restaurant, a cafe with rustic wood furnishings, and an outdoor pool.</p><a href="aboutus.php" class="res-btn">About us<i class="fa fa-arrow-right"></i></a>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="row nasir-welboxes">
              <div class="single_wel_cont col-sm-6"><a href="#" class="wel-box">
                  <div class="icon-box"><img src="img/spa.jfif" height="85" width="95"></div>
                  <h4>Luxury Spa</h4>
                  <div class="overlay transition3s">
                    <div class="icon_position_table">
                      <div class="icon_container border_round">
                        <h2>Luxury Spa</h2>
                      </div>
                    </div>
                  </div></a></div>
              <div class="single_wel_cont col-sm-6"><a href="#" class="wel-box">
                  <div class="icon-box"><img src="img/Restaurant.jpg" height="85" width="95"></div>
                  <h4>Inhouse Restaurant</h4>
                  <div class="overlay transition3s">
                    <div class="icon_position_table">
                      <div class="icon_container border_round">
                        <h2>Inhouse Restaurant</h2>
                      </div>
                    </div>
                  </div></a></div>
              <div class="single_wel_cont col-sm-6"><a href="#" class="wel-box">
                  <div class="icon-box"><img src="img/gym2.jfif" height="85" width="95"></div>
                  <h4>Fitness Gym</h4>
                  <div class="overlay transition3s">
                    <div class="icon_position_table">
                      <div class="icon_container border_round">
                        <h2>Fitness Gym</h2>
                       </div>
                    </div>
                  </div></a></div>
              <div class="single_wel_cont col-sm-6"><a href="#" class="wel-box">
                  <div class="icon-box"><img src="img/gallery.jpg" height="85" width="95"></div>
                  <h4>Museum</h4>
                  <div class="overlay transition3s">
                    <div class="icon_position_table">
                      <div class="icon_container border_round">
                        <h2>Museum</h2>
                      </div>
                    </div>
                  </div></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="our-galler-htwo clearfix common-pad">
      <div class="container clearfix">
        <div class="sec-header sec-w-header">
          <h2>Our Gallery</h2>
          <h3>Pick a preference</h3>
        </div>
      </div>
      <div class="fullwidth-silder">
        <div class="fullwidth-slider">
            <div class="item"><img src="img/packages.png" height="300" width="400">&nbsp; &nbsp; &nbsp; 
               <img src="img/swimming-pool.jpg" heigth="900" width="500"> &nbsp;
               <img src="img/suite.jpg" height="280" width="400"><br><br>
            </div>
          <div class="item"><img src="img/garden1.jpg" height="300" width="440">&nbsp;&nbsp;
              <img src="img/gallery1.jpg" height="300" width="440"> &nbsp;&nbsp;
            <img src="img/sports.jpg" height="300" width="440"> <br><br>
          </div>
          <div class="item"><img src="images/gallery-two/4.jpg" height="300" width="440">&nbsp;&nbsp;
              <img src="img/gym.jfif" height="300" width="440">&nbsp;&nbsp;
              <img src="images/gallery-two/5.jpg"height="300" width="440"> <br><br>
          </div>
          <div class="item"><img src="img/spa.jfif" height="300" width="440"> &nbsp;
           <img src="img/event1.jpg" height="300" width="440"> &nbsp; 
           <img src="img/mermaid.jpg" height="300" width="440"> 
         </div>
        </div>
      </div>
 
   <div class="container clearfix common-pad">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="sec-header-two">
            <h2>Feedbacks & Ratings</h2>
          </div>
          <div class="testimonials-wrapper">
            <div class="testimonial-sliders-two">
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
                  <p> The lighting arrangements done at the night is just simply beautiful. It looks as if you are staying in a palace. One good advantage is also its proximity to many of the places. If you are planning for a luxurious vacation, do consider this resort in Ahmedabad.</p>
                </div>
                <div class="test-bot">
                  <div class="tst-img"><img src="images/testimonials/2.png" alt="" class="img-responsive"></div>
                  <div class="client_name">
                    <h5><a href="testimonials.html">Parul Mehta </a></h5>
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
                  <p> My mother and I were spending a couple of days celebrating her 80th birthday and it was wonderful. We made special memories as always, thank you so much. It was a beautiful environment for both work and vacation... the resort, and people made it really special..</p>
                </div>
                <div class="test-bot">
                  <div class="tst-img"><img src="images/testimonials/3.png" alt="" class="img-responsive"></div>
                  <div class="client_name">
                    <h5><a href="testimonials.html">Dharmesh Patel</a></h5>
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
                  <p> The ambience and facilities of the resort were perfect for all age groups. Food selection and quality was highly appreciated. The staff was one of best part of staying at the resort. Everyone was very thoughtful and caring to insure that you have enjoyed your stay.</p>
                </div>
                <div class="test-bot">
                  <div class="tst-img"><img src="images/testimonials/4.png" alt="" class="img-responsive"></div>
                  <div class="client_name">
                    <h5><a href="testimonials.html">Sanjana Kapoor</a></h5>
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
                    <h5><a href="testimonials.html">Suresh Sharma</a></h5>
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
        </div>
        <div class="col-lg-6 col-md-6 event-wrapper">
          <div class="sec-header-two">
            <h2>Our Events</h2>
          </div>
          <div class="our-event-t-wrapper">
            <div class="media">
              <div class="media-left">
                <div class="date-box">
                  <div class="date-inner">
                    <div class="date-c-inner">
                      <p>25<span>January</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-body">
                <h2>Wedding</h2>
                <p>The wedding ceremony was held at the banquet hall & theme was fairy tale.</p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <div class="date-box">
                  <div class="date-inner">
                    <div class="date-c-inner">
                      <p>05<span>August</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-body">
                <h2>Birthday</h2>
                <p>The birthday party was held at the pool-side & theme was mystical mermaid.</p>
              </div>
            </div>
            <div class="media media-last">
              <div class="media-left">
                <div class="date-box">
                  <div class="date-inner">
                    <div class="date-c-inner">
                      <p>14<span>October</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="media-body">
                <h2>Anniversary</h2>
                <p>The anniversary celebration of Mr. and Mrs. Shah was held at lawn.</p>
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
  <script src="vendors/jquery-appear/jquery.appear.js"></script>
   <script src="vendors/jquery-countTo/jquery.countTo.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <script src="js/custom.js"></script>
 
  </body>
</html>

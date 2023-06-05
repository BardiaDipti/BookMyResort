<?php 
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Single Room</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="vendors/imagelightbox/imagelightbox.min.css">
    <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png">
    <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
  </head>
 <body class="vh-100">
        <?php
        include 'sidebar.php';
        include 'header.php';
        ?>
    
    <section class="row final-inner-header">
      <div class="container">
        <h2 class="this-title">Single Room</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index-2.html">Home</a></li>
          <li class="active">Single Room</li>
        </ol>
      </div>
    </section>
    <!-- Header  Slider style-->
    <!-- News style-->
    <section class="container clearfix common-pad-inner">
      <div class="row">
        <div class="col-md-4 col-md-push-8">
          <div class="single-sidebar-widget sroom-sidebar">
            <!-- Booking Form style-->
            <div class="book-r-form">
              <div class="room-price">
                <h6>starting from</h6>
                <p>₹7000<span>/ Per Night</span></p>
              </div>
              <div class="book-form">
                <div class="col-md-12"><b>Arrival Date</b>
                  <!--<input placeholder="Arival Date" type="text" class="form-control datepicker-example8">-->
                    <!DOCTYPE html>
                    <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        </head>
                        <body>  
                            <input type="datetime-local" name="txtDate" id="txtDate" class="form-control" placeholder="Arrival Date" required><br>
                            <script>
                                    var now = new Date();
                                    now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                                    document.getElementById('txtDate').value = now.toISOString().slice(0,16);
                                    document.getElementsByName("txtDate")[0].min = now.toISOString().slice(0,16);
                            </script>
                        </body>
                    </html>
       </div>
                <div class="col-md-12"><b>Departure Date</b>
                 <!--<input type="text" placeholder="Departure Date" class="form-control datepicker-example8">-->
                 <!DOCTYPE html>
                    <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Document</title>
                            <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
                        </head>
                        <body>  
                            <input type="datetime-local" name="txtDate" id="txtDate" class="form-control" placeholder="Departure Date" required><br>
                            <script>
                                    var now = new Date();
                                    now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                                    document.getElementById('txtDate').value = now.toISOString().slice(0,16);
                                    document.getElementsByName("txtDate")[0].min = now.toISOString().slice(0,16);
                            </script>
                        </body>
                    </html>
 </div>
                <div class="col-md-12"><b>Adults</b>
                  <div class="select-box">
                    <select name="selectMenu" class="select-menu">
                      <option value="default">Adults</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12"><b>children</b>
                  <div class="select-box">
                    <select name="selectMenu" class="select-menu">
                      <option value="default">Children</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="chk-button">
                    <!--<button type="submit" class="res-btn">Check Availability</button>-->
                  </h5><a href="booking.php" class="res-btn"><center>Book Now</center></a>
                  </div>
                </div>
              </div>
            </div>
           <div class="single-sidebar-widget-outer">
              <div class="sec-title">
                <h2>Rooms</h2>
              </div>
              <div class="popular-post">
                <ul>
                  <li class="img-cap-effect">
                    <div class="img-box"><a href="news-details.html"><img src="images/rooms/4.jpg" alt=""></a></div>
                    <div class="content"><a href="#">
                        <h4>Economy room</h4></a>
                      <h6>₹11000/ <span>Per Night</span></h6>
                    </div>
                  </li>
                  <li class="img-cap-effect">
                    <div class="img-box"><a href="news-details.html"><img src="images/rooms/5.jpg" alt=""></a></div>
                    <div class="content"><a href="#">
                        <h4>Standard room</h4></a>
                      <h6>₹9000/ <span>Per Night</span></h6>
                    </div>
                  </li>
                  <li class="img-cap-effect">
                    <div class="img-box"><a href="news-details.html"><img src="images/rooms/6.jpg" alt=""></a></div>
                    <div class="content"><a href="#">
                        <h4>Family Room</h4></a>
                      <h6>₹10000/ <span>Per Night</span></h6>
                    </div>
                  </li>
                  <li class="img-cap-effect">
                    <div class="img-box"><a href="news-details.html"><img src="images/rooms/7.jpg" alt=""></a></div>
                    <div class="content"><a href="#">
                        <h4>Residential room</h4></a>
                      <h6>₹12000/ <span>Per Night</span></h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-md-pull-4">
          <div class="single-room-wrapper">
            <!-- Rooms Slider style-->
            <div class="room-slider-wrapper">
              <div class="single-r-wrapper">
                <div class="single-sl-room">
                  <div data-hash="zero" class="owl-itemm"><img src="images/rooms/gallery/1.jpg" alt=""></div>
                  <div data-hash="one" class="owl-itemm"><img src="images/rooms/gallery/1.jpg" alt=""></div>
                  <div data-hash="two" class="owl-itemm"><img src="images/rooms/gallery/1.jpg" alt=""></div>
                  <div data-hash="three" class="owl-itemm"><img src="images/rooms/gallery/1.jpg" alt=""></div>
                  <div data-hash="four" class="owl-itemm"><img src="images/rooms/gallery/1.jpg" alt=""></div>
                </div><a href="#zero" class="button secondary url"><img src="images/rooms/gallery/3.jpg" alt=""></a><a href="#one" class="button secondary url"><img src="images/rooms/gallery/2.jpg" alt=""></a><a href="#two" class="button secondary url"><img src="images/rooms/gallery/4.jpg" alt=""></a><a href="#three" class="button secondary url"><img src="images/rooms/gallery/5.jpg" alt=""></a><a href="#four" class="button secondary url"><img src="images/rooms/gallery/6.jpg" alt=""></a>
              </div>
            </div>
            <!-- Rooms Slider style-->
            <!-- Description of Room style-->
            <div class="room-dec-wrapper">
              <h2>Description of Room</h2>
              <p>The set of our resort rooms in Ahmedabad are spread across 630 sq. ft. on a higher altitude and offer a choice between double beds and twin beds, a 39" TV, and a study table along with several other amenities. Enjoy the panaromic view of hills from your private balcony.</p>
              <p>These suites in Ahmedabad measure 1080 sq. ft. and include a separate living room, dining space, and a private balcony. These suites are the most premium offering 4500 sq. ft. at our resort. They feature 3 bedrooms with 2 double beds and a twin bed, attached to separate large living and dining spaces. With a private swimming pool and balcony, you will have the ultimate relaxing time here.</p>
            </div>
            <!-- Description of Room style-->
            <!-- Room Facilities style-->
            <div class="room-fac-wrapper">
              <h2>Room Amenities</h2>
              <div class="row">
                <div class="ro-facilitie">
                  <ul class="clearfix">
                    <li>
                      <div class="facilitie-i-box">
                        <h3>LED TV</h3><span><img src="img/LED.jpg" alt="" height="50" width="75"></span>
                      </div>
                    </li>
                    <li>
                      <div class="facilitie-i-box">
                        <h3>Tea & Coffee Set</h3><span><img src="img/coffee.jpg" alt=""  height="50" width="75"></span>
                      </div>
                    </li>
                    <li>
                      <div class="facilitie-i-box">
                        <h3>Jacuzzi</h3><span><img src="img/jacuzzi.jfif" alt="" height="50" width="75"></span>
                      </div>
                    </li>
                    <li>
                      <div class="facilitie-i-box">
                        <h3>wifi</h3><span><img src="img/wifi1.jpg" alt="" height="50" width="50"></span>
                      </div>
                    </li>
                    <li>
                      <div class="facilitie-i-box">
                        <h3>AC </h3><span><img src="img/AC.jpg" alt=""  height="50" width="75"></span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Room Facilities style-->
            <!-- Room Overview style-->
            <div class="room-overview">
              <h2>Room Overview</h2>
              <div class="table-responsive">
                <table class="table table-striped">
                  <colgroup>
                    <col class="col-xs-1">
                    <col class="col-xs-7">
                  </colgroup>
                  <tbody>
                    <tr>
                      <th scope="row"><code>Occupancy:</code></th>
                      <td>Max three Persons</td>
                    </tr>
                    <tr>
                      <th scope="row"><code>Size : </code></th>
                      <td>600 sq. feet</td>
                    </tr>
                    <tr>
                      <th scope="row"><code>View :</code></th>
                      <td>Sea or Garden view</td>
                    </tr>
                    <tr>
                      <th scope="row"><code>Room Service :</code></th>
                      <td>Available as per request</td>
                    </tr>
                    <tr>
                      <th scope="row"><code>Balcony :</code></th>
                      <td>Yes</td>
                    </tr>
                    <tr>
                      <th scope="row"><code>Free Wifi :</code></th>
                      <td>Yes</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <h5> Whether for a leisure stay, a destination wedding, or a corporate off-site, our resort in Ahmedabad is an ideal destination for every occasion. Surrounded by enchanting mountain landscapes, and lavished with balmy greens, this is a perfect gateway offering a serene ambience.
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
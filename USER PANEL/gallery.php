<?php 
require 'session-start.php';
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
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
  
  <body  class="vh-100">
      <?php
        include 'sidebar.php';
        include 'header.php';
      ?>
<section class="row final-inner-header">
      <div class="container">
        <h2 class="this-title">Gallery</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="aboutus.php">Home</a></li>
          <li class="active">Gallery</li>
        </ol>
      </div>
    </section>
      <section class="container clearfix common-pad-inner about-info-box">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="sec-header">
            <h2>Checkout Our Gallery</h2>
            <h3>Pick a preference as per your taste and budget</h3>
         </div>
          <p>We provide various facilities like gym, restaurants, rooms & packages, spa and salon, sports club, swimming pool, museum, weddings and events etc.
          The resort offers a plethora of facilities to let guests have an unmatched experience during their stay at our resort in Ahmedabad.
           Book our resort with museum in Ahmedabad for a splendid stay!
          </p> 
       </div>
      </div>
    </section>
<section class="clearfix news-wrapper">
      <div id="gallery" class="container clearfix common-pad gallery-page-one">
<ul class="gallery-filter anim-5-all text-center">
    <li data-filter="all" class="active gallery-sorter"><span>All</span></li>
    
    
    <li data-filter=".rooms" class="gallery-sorter"><span>Rooms</span></li>
          <li data-filter=".package" class="gallery-sorter"><span>Packages</span></li>
          <li data-filter=".event" class="gallery-sorter"><span>Events</span></li>
<!--          <li data-filter=".bedroom" class="gallery-sorter"><span>Spa & Salon</span></li>
          <li data-filter=".drawing" class="gallery-sorter"><span>Sports Club</span></li>
          <li data-filter=".drawing" class="gallery-sorter"><span>Gym</span></li>
          <li data-filter=".bathroom" class="gallery-sorter"><span>Swimming Pool</span></li>
          <li data-filter=".roof" class="gallery-sorter"><span>Museum</span></li>-->
          
          
       </ul>
        <div class="row">
            <div data-filter-class="gallery-sorter" class="image-gallery">
                <div class="single-gallery anim-5-all rooms masonryImage mix span-4">
                    <div class="img-holder hover"><img src="images/rooms/2.jpg" height="250" width="500">
                <div class="content"></div>
              </div>
            </div>
            <?php 
            $query_r = mysqli_query($connection,"SELECT * FROM `room_tbl`");
            while($data_r = mysqli_fetch_array($query_r))
            {
            ?>
            <div data-filter-class="gallery-sorter" class="image-gallery">
                <div class="single-gallery anim-5-all rooms masonryImage mix span-4">
                    <div class="img-holder hover"><img src="images/rooms/<?php echo $data_r['room_imagepath'];?>" height="250" width="500">
                <div class="content"></div>
              </div>
            </div>
            <?php } ?>
            <?php 
            $query_2 = mysqli_query($connection,"SELECT * FROM `package_tbl`");
            while($data_2 = mysqli_fetch_array($query_2))
            {
            ?>
            <div data-filter-class="gallery-sorter" class="image-gallery">
                <div class="single-gallery anim-5-all package masonryImage mix span-4">
                    <div class="img-holder hover"><img src="images/packages/<?php echo $data_2['package_imagepath'];?>" height="250" width="500">
                <div class="content"></div>
              </div>
            </div>
            <?php } ?>
            
                
            <?php 
            $query_3 = mysqli_query($connection,"SELECT * FROM `event_tbl`");
            while($data_3 = mysqli_fetch_array($query_3))
            {
            ?>
            <div data-filter-class="gallery-sorter" class="image-gallery">
                <div class="single-gallery anim-5-all event masonryImage mix span-4">
                    <div class="img-holder hover"><img src="images/event/<?php echo $data_3['event_imagepath'];?>" height="250" width="500">
                <div class="content"></div>
              </div>
            </div>
            <?php } ?>    
         
            
               
                
               
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
    <script src="vendors/imagelightbox/imagelightbox.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
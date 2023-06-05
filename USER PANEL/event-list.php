<?php 
require 'session-start.php';
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Event List</title>
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
        <h2 class="this-title">Events</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
            <li><a href="home.php">Home</a></li>
          <li class="active">Wedding</li>
        </ol>
      </div>
    </section>
   <section class="container clearfix common-pad-inner about-info-box">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="sec-header3">
            <h2>Event List</h2>
            <h3>Pick a theme that best suits your taste and budget</h3>
      </div>
    </section>
   <section class="clearfix news-wrapper">
      <div class="container clearfix common-pad-room">
          
          <?php 
                if(isset($_GET["type"]))
                {
                   $event_type= $_GET["type"];
                   $search = "where event_type='{$event_type}'";
                }
                else{
                   $search =""; 
                }
              $q = mysqli_query($connection, "SELECT * FROM `event_tbl` $search") or die(mysqli_error($connection));
             $count=mysqli_num_rows($q);
             if($count>0)
             {
                 $i=0;
                 while($data_e = mysqli_fetch_array($q)){
                     $i++;
                     
                     if($i%2==0)
                     {
                         ?>
          
          <div class="room-t-wrapper room-l-wrapper">
            <div class="col-lg-5 col-md-12 content">
              <h2><?php echo $data_e["event_title"];?> </h2>
              <p><?php echo $data_e["event_details"];?></p>
              <div class="bottom-content">
                <div class="pull-left">
                  <p>₹<?php echo $data_e["event_price"];?></p>
                </div>
                <div class="pull-right"><a href="event-detail.php?id=<?php echo $data_e["event_id"];?>">view event</a></div>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 img-wrap">
                <div class="img-holder"><img src="images/event/<?php echo $data_e["event_imagepath"];?>" style='width:822px;height:548px;' alt="" class="img-responsive"></div>
            </div>
          </div>
                         
          <?php
                     }
                     else{
                         ?> 
        <div class="row">
          <!-- One-->
          <div class="room-t-wrapper">
            <div class="col-lg-7 col-md-12 img-wrap">
                <div class="img-holder"><img src="images/event/<?php echo $data_e["event_imagepath"];?>" style='width:822px;height:548px;' alt="" class="img-responsive"></div>
            </div>
            <div class="col-lg-5 col-md-12 content">
              <h2> <?php echo $data_e["event_title"];?> </h2>
              <p><?php echo $data_e["event_details"];?></p>
              <div class="bottom-content">
                <div class="pull-left">
                  <p>₹<?php echo $data_e["event_price"];?></p>
                </div>
                <div class="pull-right"><a href="event-detail.php?id=<?php echo $data_e["event_id"];?>">view event</a></div>
              </div>
            </div>
          </div>                   
         
          <?php
                     }
                     ?>
        
          <?php 
                 }
              ?>
             <?php } else{
                 echo "No Event Found";
             } ?>
          
        
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
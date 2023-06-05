<?php 
require 'session-start.php';
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Package List</title>
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
        <h2 class="this-title">Package List</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li class="active">Package List</li>
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
              
              <?php 
                if(isset($_GET["type"]))
                {
                   $package_type= $_GET["type"];
                   $search = "where package_type='{$package_type}'";
                }
                else{
                   $search =""; 
                }
              $q = mysqli_query($connection, "SELECT * FROM `package_tbl` $search") or die(mysqli_error($connection));
             $count=mysqli_num_rows($q);
             if($count>0)
             {
                 
                 while($data_p = mysqli_fetch_array($q))
                 {
                 ?>
          <div class="room-wrapper">
              <div class="media">
                  <div class="media-left"><a href="package-detail.php?id=<?php echo $data_p["package_id"];?>"><img src="images/packages/<?php echo $data_p["package_imagepath"];?>" height="300px" width="400px"></a></div>
                <div class="media-body">
                  <h2><?php echo $data_p["package_title"];?></h2>
                  <p><?php echo $data_p["package_details"];?></p>
               </div>
                <div class="media-right">
                  <p>₹<?php echo $data_p["package_price"];?></p><a href="package-detail.php?id=<?php echo $data_p["package_id"];?>" >view package</a>
                </div>
              </div>
            </div>  
            <?php 
                 }
             }
             else{
                 ?>
            
                <h3>No Record Found</h3>
                 <?php 
             }
             ?>
         
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
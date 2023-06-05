<?php 
require 'session-start.php';
require 'Database/connection.php';
if(isset($_POST["submit"]))
{
    
    
    $feedback_date=mysqli_real_escape_string($connection, $_POST["txtDate"]);
    $feedback_details=mysqli_real_escape_string($connection, $_POST["feedback_details"]);
    $ratings=mysqli_real_escape_string($connection, $_POST["ratings"]);
    $cust_id=mysqli_real_escape_string($connection, $_POST["cust_id"]);

    $query_check = mysqli_query($connection,"SELECT * FROM `feedback_tbl` WHERE `cust_id`='{$cust_id}'");
    $count=mysqli_num_rows($query_check);
    if($count>"0")
    {
        echo "<script>alert('Your Feedback already exist!');window.location='feedback.php'</script>";
        exit();
    }
    else{
    $query_ins = mysqli_query($connection,"INSERT INTO `feedback_tbl`(`feedback_date`, `feedback_details`, `ratings`, `cust_id`) VALUES ('{$feedback_date}','{$feedback_details}','{$ratings}','{$cust_id}')");
    if($query_ins)
    {
        echo "<script>alert('Your feedback successfully added');window.location='feedback.php';</script>";
    }
    }
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Feedback</title>
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
        <h2 class="this-title">Feedbacks</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="aboutus.php">Home</a></li>
          <li class="active">Feedbacks</li>
        </ol>
      </div>
    </section>
   <section class="container clearfix common-pad-inner about-info-box">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
          <div class="sec-header3">
              <h2>Feedbacks</h2>
       </div>
      </div>
    </section>
   <section class="clearfix news-wrapper">
      <div class="container clearfix common-pad-test">
        <div class="row">
            <?php 
            $query_feedback = mysqli_query($connection,"SELECT * FROM `feedback_tbl` order by feedback_date desc");
            while($data_fd=mysqli_fetch_array($query_feedback))
            {
                $query_cus =mysqli_query($connection,"SELECT * FROM `customer_tbl` where cust_id='{$data_fd["cust_id"]}'");
                $data_cus = mysqli_fetch_array($query_cus);
            ?>
            <div class="col-lg-12 col-md-12 testimonial-sec-p">
            <div class="media testimonial-p">
              <!--<div class="media-left"><a href="#"><img src="images/testimonials/9.jpg" alt=""></a></div>-->
              <div class="media-body">
                <p><?php echo $data_fd["feedback_details"];?></p><a href="#"><?php echo $data_cus["cust_fname"];?> <?php echo $data_cus["cust_lname"];?></a>
                <br>
                <?php echo date("d-m-Y",strtotime($data_fd["feedback_date"]));?>
                &nbsp;
                    <?php
                    
                for($i=1;$i<$data_fd["ratings"];$i++)
                {
                ?>
                <i class="fa fa-star" style="color:orange;"></i>
                <?php } ?>
             </div>
            </div>
          </div>
            <?php } ?>
<!--          <div class="col-lg-12 col-md-12 testimonial-sec-p">
            <div class="media testimonial-p">
              <div class="media-left"><a href="#"><img src="images/testimonials/9.jpg" alt=""></a></div>
              <div class="media-body">
                <p>The ambience and facilities of the resort were perfect for all age groups. Food selection and quality was highly appreciated. The staff was one of best part of staying at the resort. Everyone was very thoughtful and caring to insure that you have enjoyed your stay. </p><a href="#">Sanjana Kapoor</a>
             </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 testimonial-sec-p">
            <div class="media testimonial-p">
              <div class="media-left"><a href="#"><img src="images/testimonials/6.jpg" alt=""></a></div>
              <div class="media-body">
               <p> One of the best resorts in Ahmedabad. The rooms are very spacious and beautiful. Every room has got amazing view. It has an amazing pool. Sitting by the pool during early morning and also during night is an amazing feeling in itself.</p><a href="#">William Jones</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 testimonial-sec-p">
            <div class="media testimonial-p">
              <div class="media-left"><a href="#"><img src="images/testimonials/7.jpg" alt=""></a></div>
              <div class="media-body">
                <p> My mother and I were spending a couple of days celebrating her 80th birthday and it was wonderful. We made special memories as always, thank you so much. It was a beautiful environment for both work and vacation... the resort, and people made it really special.</p><a href="#">Dharmesh Patel</a>
             </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 testimonial-sec-p">
            <div class="media testimonial-p">
              <div class="media-left"><a href="#"><img src="images/testimonials/8.jpg" alt=""></a></div>
              <div class="media-body">
               <p> The lighting arrangements done at the night is just simply beautiful. It looks as if you are staying in a palace. One good advantage is also its proximity to many of the places. If you are planning for a luxurious vacation, do consider this resort in Ahmedabad.</p><a href="#">Parul Mehta</a>
             </div>
            </div>
          </div>-->
        </div>
      </div>
    </section>
      <?php 
      if(isset($_SESSION["cuid"]))
      {
          $query_cus = mysqli_query($connection,"SELECT * FROM `customer_tbl` where cust_id='{$_SESSION["cuid"]}'");
          $data_cus = mysqli_fetch_array($query_cus);
      ?>
      <section class="container clearfix common-pad booknow">
      <div class="sec-header">
          <h2>Send a Feedback</h2><br>
      </div>
      <div class="row nasir-contact">
        <div class="col-md-10" >
          <div class="book-left-content input_form">
              <form id="myform" action="feedback.php" method="post">
              <div class="row">
                  <input id="cust_id" type="hidden"  name="cust_id" placeholder="Enter your customer id" value="<?php echo $data_cus["cust_id"];?>" class="form-control" required>
                  <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>First Name</span>
                  <input id="name" type="text"  name="cust" placeholder="Enter your customer id" value="<?php echo $data_cus["cust_fname"];?>" class="form-control" required>
                </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>Last Name</span>
                  <input id="name" type="text"  name="cust" placeholder="Enter Last" class="form-control" value="<?php echo $data_cus["cust_lname"];?>" required>
                </div>
                
                  
              </div>
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12"><span>Rating</span>
                  
                      <select class="form-control" name="ratings" required="">
                      <option value="">Select</option>    
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                  </select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><span>Date</span>
                  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->                                            
            <input type="date" name="txtDate" id="txtDate" class="form-control" required>
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
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><span>Feedback</span>
                  <textarea id="feedback_details" rows="6" name="feedback_details" placeholder="Enter your feedback" class="form-control" required></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button type="submit" value="submit now" name="submit" class="res-btn">Submit Now</button>
                </div>
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
    </section>
      <?php }?>
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
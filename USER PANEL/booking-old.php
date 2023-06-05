<?php 
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
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
        <h2 class="this-title">Booking</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li class="active">Booking</li>
        </ol>
      </div>
    </section>
   <section class="container clearfix common-pad-inner booknow">
      <div class="sec-header">
          <h2>Booking</h2><br>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
          <div class="book-left-content input_form">
            <form id="contactBooking" action="home.php" method="post">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                    <input id="name" type="number" min="0" name="customer"  placeholder="Enter your customer id" class="form-control" required>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                    <input id="email" type="number" min="0" name="category" placeholder="Enter your category id" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
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
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                  <div class="select-box">
                    <select name="chooseAdults" class="select-menu">
                      <option value="default">Adults</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                  <div class="select-box">
                    <select name="chooseChildren" class="select-menu">
                      <option value="default">Children</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <textarea id="message" rows="6" name="details" placeholder="Enter your details" class="form-control" required></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button type="submit" class="res-btn">Submit Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-4 pull-right">
          <div class="book-right"><span><img src="images/booking/1.jpg" alt=""></span>
            <h2>About Resort</h2>
            <p>Simply furnished rooms with a warm vibe feature flat-screen TVs, minifridges, free Wi-Fi, and tea and coffeemaking facilities. Some have pool views. Suites add separate living rooms and/or whirlpool baths. Room service is available 24/7.</p>
          </div>
        </div>
      </div>
    </section>
    <?php
include 'footer.php';
?>

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script src="vendors/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/zebra_datepicker.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/email.js"></script>
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
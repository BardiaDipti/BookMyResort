<?php 
require 'session-start.php';
require 'Database/connection.php';
require 'session-check.php';


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
          <h2>Booking List</h2><br>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <?php 
            $query_book = mysqli_query($connection,"SELECT * FROM `booking_tbl` WHERE `cust_id`='{$cust_id}' and category_id='1' order by booking_date desc");
            $count=mysqli_num_rows($query_book);
if($count>0)
{

            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Srno</th>
                        <th>Booking Name</th>
                        <th>Book Amount</th>
                        <th>Date & Time</th>
                        <th>Category</th>
                        
                    </tr>
                    
                </thead>
                <tbody>
                    <?php 
                    $i=0;
                    while($data_book = mysqli_fetch_array($query_book))
                    {
                        $i++;
                        
//                        $query_room = mysqli+query($connection,"");
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $data_book["booking_name"];?></td>
                        <td>₹ <?php echo $data_book["book_amount"];?></td>
                        <td><?php echo date("d-m-Y h:i A",strtotime($data_book["booking_date"]));?></td>
                        <td><?php echo $data_book["booking_details"];?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
<?php } else{echo "No record found";} ?>
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
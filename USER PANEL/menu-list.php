<?php 
require 'session-start.php';
require 'Database/connection.php';
//require 'session-check.php';
//require 'session-check.php';
if(isset($_POST["submit"]))
{
    
    $booking_name=mysqli_real_escape_string($connection, $_POST["booking_name"]);
    $booking_date=mysqli_real_escape_string($connection, $_POST["booking_date"]);
    $booking_time=mysqli_real_escape_string($connection, date("H:i:s",strtotime($_POST["booking_time"])));
    $book_datetime =$booking_date." ".$booking_time;
    $book_amount=mysqli_real_escape_string($connection, $_POST["book_amount"]);
    $f_name=mysqli_real_escape_string($connection, $_POST["f_name"]);
    $l_name=mysqli_real_escape_string($connection, $_POST["l_name"]);
    $room_id=mysqli_real_escape_string($connection, $_POST["room_id"]);
   
    $category_id="2";
    $booking_details="Room";
    
    
    $query_ins = mysqli_query($connection,"INSERT INTO `booking_tbl`(`booking_name`, `booking_details`, `booking_date`, `cust_id`, `category_id`, `room_id`, `f_name`, `l_name`, `book_amount`) VALUES ('{$booking_name}','{$booking_details}','{$book_datetime}','{$cust_id}','{$category_id}','{$room_id}','{$f_name}','{$l_name}','{$book_amount}')");
    if($query_ins)
    {
        echo "<script>alert('Your booking successfully added');window.location='booking-list.php';</script>";
    }
    exit();
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menu List</title>
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
        <h2 class="this-title">Menu List</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li class="active">Menu List</li>
        </ol>
      </div>
    </section>
   <section class="container clearfix common-pad-inner booknow">
      <div class="sec-header">
          <h2>Menu List</h2><br>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <?php 
            $query_menu = mysqli_query($connection,"SELECT * FROM `menu_tbl` order by menu_item asc");
            $count=mysqli_num_rows($query_menu);
if($count>0)
{

            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Srno</th>
                        <th>Menu Name</th>
                        <th>Price</th>
                        <th>Action</th>
                        
                        
                    </tr>
                    
                </thead>
                <tbody>
                    <?php 
                    $i=0;
                    while($data_menu = mysqli_fetch_array($query_menu))
                    {
                        $i++;
                        

                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $data_menu["menu_item"];?></td>
                        <td>₹ <?php echo $data_menu["price"];?></td>
                        
                        <td><a href="cart-add.php?id=<?php echo $data_menu["menu_id"];?>">Add To Cart</a></td>
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
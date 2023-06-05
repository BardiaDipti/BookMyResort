<?php 
require 'session-start.php';
require 'Database/connection.php';
require 'session-check.php';

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
   
}
else{
    $id="";
}

$query_order = mysqli_query($connection,"SELECT * FROM `order_tbl` where order_id='{$id}'");
            $count=mysqli_num_rows($query_order);
if($count==0)
{
    header("location:order-list.php");
    exit();
}            
$data_order = mysqli_fetch_array($query_order);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order Detail</title>
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
        <h2 class="this-title">Order Detail</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li class="active">Order Detail</li>
        </ol>
      </div>
    </section>
   <section class="container clearfix common-pad-inner booknow">
      <div class="sec-header">
          <h2>Order Detail</h2><br>
      </div>
      <div class="row">
        <div class="col-lg-12">  
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th colspan="2">Order Information</th>
                    </tr>
                    <tr>
                        <td>Order No</td>
                        <td><?php echo $order_prefix.$data_order["order_no"];?></td>
                    </tr>
                    <tr>
                        <td>Order Date</td>
                        <td><?php echo date("d-m-Y",strtotime($data_order["order_date"]));?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>₹ <?php  echo $data_order["order_total"];?></td>
                    </tr>
                    <tr>
                        <td>Payment Method</td>
                        <td><?php echo $data_order["payment_method"];?></td>
                    </tr>
                </thead>
            </table>
        </div>
          
          <div class="col-lg-12">  
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th colspan="2">Bill Information</th>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td><?php echo $data_order["f_name"];?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><?php echo $data_order["l_name"];?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?php  echo $data_order["order_address"];?></td>
                    </tr>
                    
                </thead>
            </table>
        </div>
        <div class="col-lg-12">
            <?php 
            $query_detail = mysqli_query($connection,"SELECT * FROM `order_detail_tbl` where order_id='{$id}'");
            $count=mysqli_num_rows($query_detail);
if($count>0)
{
                

            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="5">Item Details</th>
                    </tr>
                    <tr>
                        <th>Srno</th>
                        <th>Menu Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        
                        
                    </tr>
                    
                </thead>
                <tbody>
                    <?php 
                    $i=0;
                    while($data_d = mysqli_fetch_array($query_detail))
                    {
                        $i++;
                        
                        
                        $query_menu = mysqli_query($connection,"SELECT * FROM `menu_tbl` where menu_id='{$data_d["menu_id"]}'");
                        $data_menu=mysqli_fetch_array($query_menu);
//                        
//                        $subtotal=$data_menu["price"]*$data_cart["cart_qty"];
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $data_menu["menu_item"];?></td>
                        <td>₹ <?php  echo $data_d["menu_price"];?>
                        <td><?php  echo $data_d["menu_qty"];?>
                        </td>
                        
                        <td>₹ <?php  echo $data_d["menu_total"];?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
            
<?php } else{
//    echo "No Order Found";
    
} ?>
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
<?php 
require 'session-start.php';
require 'Database/connection.php';
require 'session-check.php';

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    
    $query_del = mysqli_query($connection,"DELETE FROM `cart_tbl` WHERE `cart_id`='{$id}'");
    if($query_del)
    {
        echo "<script>alert('Your item remove successfully');window.location='cart-list.php';</script>";
    }
    exit();
}

if(isset($_POST["submit"]))
{
    
    $cart_id=$_POST["cart_id"];
    $cart_qty=$_POST["cart_qty"];
    
    $query_up = mysqli_query($connection,"UPDATE `cart_tbl` SET `cart_qty`='{$cart_qty}' WHERE `cart_id`='{$cart_id}'");
    if($query_up)
    {
        echo "<script>alert('Your item updated successfully');window.location='cart-list.php';</script>";
    }
    exit();
}

$query_1=mysqli_query($connection,"SELECT * FROM `customer_tbl` where cust_id='{$cust_id}'");
$data_cus=mysqli_fetch_array($query_1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
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
        <h2 class="this-title">Checkout</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li class="active">Checkout</li>
        </ol>
      </div>
    </section>
   <section class="container clearfix common-pad-inner booknow">
      <div class="sec-header">
          <h2>Checkout</h2><br>
      </div>
      
   <div class='row'> 
             <div class="col-sm-12">
       
              <?php 
            $query_cart = mysqli_query($connection,"SELECT * FROM `cart_tbl` where cust_id='{$cust_id}'");
            $count=mysqli_num_rows($query_cart);
if($count>0)
{

            ?>
            <table class="table table-bordered">
                <thead>
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
                    $total =0;
                    while($data_cart = mysqli_fetch_array($query_cart))
                    {
                        $i++;
                        
                        
                        $query_menu = mysqli_query($connection,"SELECT * FROM `menu_tbl` where menu_id='{$data_cart["menu_id"]}'");
                        $data_menu=mysqli_fetch_array($query_menu);
                        
                        $subtotal=$data_menu["price"]*$data_cart["cart_qty"];
                        $total+=$subtotal;
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $data_menu["menu_item"];?></td>
                        <td>₹ <?php echo $data_menu["price"];?></td>
                        <td><?php  echo $data_cart["cart_qty"];?>
                        
                          
                        </td>
                        <td>₹ <?php echo $subtotal;?></td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"></td>
                        <td>Grand Total</td>
                        <td>₹ <?php echo $total;?></td>
                       
                    </tr>
                </tfoot>
            </table>
            
            
<?php } else{echo "Sorry, Your cart is empty";} ?>
        </div>
   </div>
   
      <div class="row">
          
          <div class="sec-header">
          <h2>Billing Information</h2><br>
      </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-left">
          <div class="book-left-content input_form">
              <form id="contactBooking" action="checkout-process.php" method="post">
              <div class="row">
                  
                  <input type='hidden' name='order_total' value='<?php echo $total;?>'>
                <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                    <input id="name" type="text" name="f_name" value="<?php echo $data_cus["cust_fname"];?>"  placeholder="Enter First Name" class="form-control" required>
                </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                    <input id="name" type="text" name="l_name" value="<?php echo $data_cus["cust_lname"];?>" placeholder="Enter Last Name" class="form-control" required>
                </div>

                  <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                      <select name='payment_method' class='form-control' required>
                          <option value=''>Select Payment Method</option>
                          <option value='Cash'>Cash</option>
                      </select>
                </div>
                    
                  <div class="col-lg-12 col-md-12 col-sm-12 m0 col-xs-12">
                      <textarea class='form-control' name='order_address' rows='3' cols='2' placeholder="Enter Address" required></textarea>
                </div>
                  
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <button type="submit" name="submit" class="res-btn">Checkout</button>
                </div>
              </div>
            </form>
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
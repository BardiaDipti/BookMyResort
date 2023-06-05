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

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cart List</title>
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
        <h2 class="this-title">Cart List</h2>
      </div>
    </section>
    <section class="row final-breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li class="active">Cart List</li>
        </ol>
      </div>
    </section>
   <section class="container clearfix common-pad-inner booknow">
      <div class="sec-header">
          <h2>Cart List</h2><br>
      </div>
      <div class="row">
        <div class="col-lg-12">
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
                        <th>Action</th>
                        
                        
                    </tr>
                    
                </thead>
                <tbody>
                    <?php 
                    $i=0;
                    while($data_cart = mysqli_fetch_array($query_cart))
                    {
                        $i++;
                        
                        
                        $query_menu = mysqli_query($connection,"SELECT * FROM `menu_tbl` where menu_id='{$data_cart["menu_id"]}'");
                        $data_menu=mysqli_fetch_array($query_menu);
                        
                        $subtotal=$data_menu["price"]*$data_cart["cart_qty"];
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $data_menu["menu_item"];?></td>
                        <td>₹ <?php echo $data_menu["price"];?></td>
                        <td><?php // echo $data_cart["cart_qty"];?>
                        
                            <form method="post" action="cart-list.php">
                                <input type="hidden" name="cart_id" value="<?php echo $data_cart["cart_id"];?>">
                                <input type="number" class="form-control" style="width:70px;display:inline !important;" name="cart_qty"  min="1" max="5" value="<?php echo $data_cart["cart_qty"];?>" required>
                                <button type="submit" name="submit" class="btn btn-info btn-xs"><i class="fa fa-refresh"></i></button>
                            </form>
                        </td>
                        <td>₹ <?php echo $subtotal;?></td>
                        <td><a href="cart-list.php?id=<?php echo $data_cart["cart_id"];?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
            <a href="menu-list.php" class="btn btn-primary btn-md">Back To Menu List</a>
            <a href="checkout.php" class="btn btn-success btn-md">Process Checkout</a> 
<?php } else{echo "Sorry, Your cart is empty";} ?>
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
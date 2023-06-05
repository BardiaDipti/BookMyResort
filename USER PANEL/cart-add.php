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
 $query_menu = mysqli_query($connection,"SELECT * FROM `menu_tbl` where menu_id='{$id}'");
            $count=mysqli_num_rows($query_menu);
if($count==0)
{
    header("location:menu-list.php");
    exit();
}

$query_check = mysqli_query($connection,"SELECT * FROM `cart_tbl` WHERE `cust_id`='{$cust_id}' and `menu_id`='{$id}'");
$count_cart=mysqli_num_rows($query_check);
if($count_cart>0)
{
      echo "<script>alert('This Item already exist in cart');window.location='cart-list.php';</script>"; 
}
else{
$query_ins = mysqli_query($connection,"INSERT INTO `cart_tbl`(`cust_id`, `menu_id`) VALUES ('{$cust_id}','{$id}')");
if($query_ins)
{
    echo "<script>alert('Your Item added to cart successfully');window.location='cart-list.php';</script>";
}

}
?>
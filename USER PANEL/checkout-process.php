<?php 
require 'session-start.php';
require 'Database/connection.php';
require 'session-check.php';
if(isset($_POST["submit"]))
{
    $order_total=mysqli_real_escape_string($connection,$_POST["order_total"]);
    $f_name=mysqli_real_escape_string($connection,$_POST["f_name"]);
    $l_name=mysqli_real_escape_string($connection,$_POST["l_name"]);
    $order_address=mysqli_real_escape_string($connection,$_POST["order_address"]);
    $payment_method=mysqli_real_escape_string($connection,$_POST["payment_method"]);
    $order_date =date("Y-m-d H:i:s");
    
    $query_check = mysqli_query($connection,"SELECT count(*) as total_order FROM `order_tbl`");
    $data = mysqli_fetch_array($query_check);
    $order_no=$data["total_order"]+1;
    
    $query_order = mysqli_query($connection,"INSERT INTO `order_tbl`(`order_no`,`order_date`, `cust_id`, `order_total`, `payment_method`,`order_address`,`f_name`,`l_name`) VALUES ('{$order_no}','{$order_date}','{$cust_id}','{$order_total}','{$payment_method}','{$order_address}','{$f_name}','{$l_name}')");
    if($query_order)
    {
       $order_id= mysqli_insert_id($connection);
       
       $query_cart = mysqli_query($connection,"SELECT * FROM `cart_tbl` WHERE `cust_id`='{$cust_id}'");
       while($data_cart = mysqli_fetch_array($query_cart))
       {
           
           $menu_id=$data_cart["menu_id"];
           $cust_id=$data_cart["cust_id"];
           $menu_qty= $data_cart["cart_qty"];
           
           $query_menu = mysqli_query($connection,"SELECT * FROM `menu_tbl` WHERE `menu_id`='{$menu_id}'");
           $data_menu = mysqli_fetch_array($query_menu);
           
           $menu_price= $data_menu["price"];
           $menu_total=$menu_price*$menu_qty;
       $query_ins = mysqli_query($connection,"INSERT INTO `order_detail_tbl`(`order_id`, `menu_id`,`menu_price`,`menu_qty`, `menu_total`, `cust_id`) VALUES ('{$order_id}','{$menu_id}','{$menu_price}','{$menu_qty}','{$menu_total}','{$cust_id}')");
       }
       
       
       $query_del = mysqli_query($connection,"DELETE FROM `cart_tbl` WHERE `cust_id`='{$cust_id}'");
       if($query_del)
       {
           echo "<script>alert('Your Menu Order successfully added');window.location='order-list.php';</script>";
       }
    }
    
}
?>
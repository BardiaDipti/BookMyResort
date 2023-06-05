<?php
if(isset($_SESSION["cuid"]))
{
    $cust_id=$_SESSION["cuid"];
}
else{
    echo "<script>alert('Please First Login');window.location='login.php';</script>";
    exit();
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


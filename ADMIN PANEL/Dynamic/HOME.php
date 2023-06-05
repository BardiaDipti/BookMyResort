<?php

session_start();
echo "Hi ".$_SESSION['Email'];

if(!isset($_SESSION['Password']))
{
    header("location:LOGIN.php");
}
echo " <a href='LOGOUT.php'>Logout</a> |";
echo " <a href='CHANGE_PSWD.php'>Change Password</a> ";

?>
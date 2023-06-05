<?php

session_start();
$connection = new mysqli("localhost","root","","resort_db");

if(!isset($_SESSION['Password']))
{
    header("location:LOGIN.php");
}

if ($_POST)
{
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    
    $oldpswdquery = mysqli_query($connection, "Select admin_password from admin_tbl where admin_email='{$_SESSION['Email']}'") or die(mysqli_error($connection));
    $oldpswdfromdb = mysqli_fetch_array($oldpswdquery);
    
    if($oldpswdfromdb['admin_password'] == $opass)
    {
        if($npass == $cpass)
        {
            if($opass == $npass)
            {
                echo "<script>alert('Old & new password cannot be same!')</script>";
            }
            else
            {
                $updatequery = mysqli_query($connection, "Update admin_tbl Set admin_password='{$npass}' where admin_email='{$_SESSION['admin_email']}'") or die(mysqli_error($connection));    
                
                if($updatequery)
                {
                    echo "<script>alert('Password Changed Successfully!')</script>";
                }
            }
        }
        else
        {
            echo "<script>alert('New & confirm password must be same!')</script>";
        }
    }
    else
    {
        echo "<script>alert('Invalid Old Password!')</script>";
    }
}

?>

<html>
    <body>
        <form method="POST">
            Old Password: <input type="text" name="opass" required="true" placeholder="Enter old password"><br><br>
            New Password: <input type="text" name="npass" required="true" placeholder="Enter new password"><br><br>
            Confirm Password: <input type="text" name="cpass" required="true" placeholder="Enter confirm password"><br><br>
            <input type="submit" value="Submit">
        </form> 
    </body>
</html>
<?php

session_start();

$connection = new mysqli("localhost","root","","resort_db");

if($_POST)
{
    $email = $_POST['email'];
    $password = $_POST['password'];    
    $selectquery = mysqli_query($connection, "Select * from admin_tbl where admin_email='{$email}' and admin_password='{$password}'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($selectquery);
    $row = mysqli_fetch_array($selectquery);
    
    if($count>0)
    {
        $_SESSION['Email'] = $row['admin_email'];
        $_SESSION['Password'] = $row['admin_password'];
        header("location:HOME.php");
    }
    else 
    {
        echo "<script>alert('Invalid Login Details!')</script>";
    }
    
    echo $count;    
};

?>

<html>
    <body>
        <form method="POST">
            Email: <input type="email" name="email" required="true" placeholder="Enter email"><br><br>
            Password: <input type="password" name="password" required="true" placeholder="Enter password"><br><br>
            <input type="submit" value="Login">
        </form> 
    </body>
</html>
<?php
require 'session-start.php';
ob_start();
require 'Database/connection.php';
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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

    <body class="vh-100">
        <?php
        include 'sidebar.php';
        include 'header.php';
        ?>
        <div class="authincation h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center ">
                    <div class="col-md-6">
                        <div class="authincation-content">
                            <div class="row no-gutters">
                                <div class="col-xl-12">
                                    <div class="auth-form">
                                        <form id="myform" method="POST">
                                            <br><h1>LOGIN</h1>
                                             <?php
                                    
                                    

                                    if ($_POST) {
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];
                                        $selectquery = mysqli_query($connection, "Select * from customer_tbl where cust_email='{$email}' and cust_password='{$password}'") or die(mysqli_error($connection));
                                        $count = mysqli_num_rows($selectquery);
                                        $row = mysqli_fetch_array($selectquery);

                                        if ($count > 0) {
                                            $_SESSION['cuid']=$row['cust_id'];
                                            $_SESSION['Email'] = $row['cust_email'];
                                            $_SESSION['Password'] = $row['cust_password'];
                                            header("location:home.php");
                                        } 
                                        else {
                                            echo "<script>alert('Invalid Login Details!')</script>";
                                        }
                                    }
                                    ?>
                                    
                                    <form id="myform" method="POST">
                                        <strong>Email :</strong> <input type="email" name="email" class="form-control" required="true" placeholder="Enter email"><br>
                                        <strong>Password :</strong> <input type="<strong>Email :</strong>password" name="password" class="form-control" required="true" placeholder="Enter password">
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <br><input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label><br>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="Password_Forgot.php">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button><br>
                                        </div>
                                    </form>
                                           <!-- <br><div class="mb-3">                                               
                                                <label class="mb-1"><strong>Email</strong></label>
                                                <input type="email"name="txt1" class="form-control" placeholder="bookmyresort04@gmail.com" required>
                                            </div><br>
                                            <div class="mb-3">
                                                <label class="mb-1"><strong>Password</strong></label>
                                                <input type="password" name="txt2" class="form-control" placeholder="Password" required>
                                            </div><br>
                                            <div class="row d-flex justify-content-between mt-4 mb-2">
                                                <div class="mb-3">
                                                    <div class="form-check custom-checkbox ms-1">
                                                        <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                        <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                    </div><br>
                                                </div>
                                                <div class="mb-3">
                                                    <a href="Password_Forgot.php">Forgot Password?</a>
                                                </div><br>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                            </div><br>
                                        </form>-->
                                        <div class="new-account mt-3">
                                            <p>Don't have an account? <a class="text-primary" href="Register.php">Register</a></p>
                                        </div><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>

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

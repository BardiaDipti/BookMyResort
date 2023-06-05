<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
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
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									
                                    <form id="myform" method="POST">
                                        <br><h1>Change Password</h1>
                                          <?php
                                 
                                    $connection = new mysqli("localhost", "root", "", "resort_db");

                                    if (!isset($_SESSION['Password'])) {
                                    //header("location:login.php");
                                    }

                                    if ($_POST) {
                                        $opass = $_POST['opass'];
                                        $npass = $_POST['npass'];
                                        $cpass = $_POST['cpass'];

                                        $oldpswdquery = mysqli_query($connection, "Select * from customer_tbl where cust_email='{$_SESSION['Email']}'") or die(mysqli_error($connection));
                                        $oldpswdfromdb = mysqli_fetch_array($oldpswdquery);

                                        if ($oldpswdfromdb['cust_password'] == $opass) {
                                            if ($npass == $cpass) {
                                                if ($opass == $npass) {
                                                    echo "<script>alert('Old & new password cannot be same!')</script>";
                                                } else {
                                                    $updatequery = mysqli_query($connection, "Update customer_tbl Set cust_password='{$npass}' Where cust_email='{$_SESSION['Email']}'") or die(mysqli_error($connection));

                                                    if ($updatequery) {
                                                        echo "<script>alert('Password Changed Successfully!')</script>";
                                                    }
                                                }
                                            } else {
                                                echo "<script>alert('New & confirm password must be same!')</script>";
                                            }
                                        } else {
                                            echo "<script>alert('Invalid Old Password!')</script>";
                                        }
                                    }
                                    ?>
                                    <form id="myform" method="POST">
                                        <strong>Old Password :</strong> <input type="text" name="opass" class="form-control" required="true" placeholder="Enter old password"><br>
                                        <strong>New Password :</strong> <input type="text" name="npass" class="form-control" required="true" placeholder="Enter new password"><br>
                                        <strong>Confirm Password :</strong> <input type="text" name="cpass" class="form-control" required="true" placeholder="Enter confirm password"><br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button><br>
                                        </div>
                                    </form> 
                                      <!--  <br><div class="mb-3">
                                            <label><strong>Old Password</strong></label>
                                            <input type="password" name="txt1" class="form-control" placeholder="Password" required>
                                        </div><br>
                                        <div class="mb-3">
                                            <label><strong>New Password</strong></label>
                                            <input type="password" name="txt2" class="form-control" placeholder="Password" required>
                                        </div><br>
                                        <div class="mb-3">
                                            <label><strong>Confirm Password</strong></label>
                                            <input type="password" name="txt3" class="form-control" placeholder="Password" required>
                                        </div><br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button><br><br>
                                        </div>-->
                                    </form>
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

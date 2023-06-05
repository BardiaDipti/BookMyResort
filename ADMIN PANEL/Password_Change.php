<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:title" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<title>Change Password</title>
	
	<link rel="shortcut icon" type="png" href="logo.png" />
        <link href="style.css" rel="stylesheet">
</head>
<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="Dashboard.php"><img src="logo.png" alt=""></a>
                                    </div>
                                    <h2 class="text-center mb-4">Book My Resort</h2>
                                    
                                    <?php
                                    session_start();
                                    $connection = new mysqli("localhost", "root", "", "resort_db");

                                    if (!isset($_SESSION['Password'])) {
                                        header("location:Login.php");
                                    }

                                    if ($_POST) {
                                        $opass = $_POST['opass'];
                                        $npass = $_POST['npass'];
                                        $cpass = $_POST['cpass'];

                                        $oldpswdquery = mysqli_query($connection, "Select admin_password from admin_tbl where admin_email='{$_SESSION['Email']}'") or die(mysqli_error($connection));
                                        $oldpswdfromdb = mysqli_fetch_array($oldpswdquery);

                                        if ($oldpswdfromdb['admin_password'] == $opass) {
                                            if ($npass == $cpass) {
                                                if ($opass == $npass) {
                                                    echo "<script>alert('Old & new password cannot be same!')</script>";
                                                } else {
                                                    $updatequery = mysqli_query($connection, "Update admin_tbl Set admin_password='{$npass}'") or die(mysqli_error($connection));

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
                                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                        </div>
                                    </form> 
                                    <!--<form id="myform" method="POST">
                                        <div class="mb-3">
                                            <label><strong>Old Password</strong></label>
                                            <input type="password" name="txt1" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="mb-3">
                                            <label><strong>New Password</strong></label>
                                            <input type="password" name="txt2" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="mb-3">
                                            <label><strong>Confirm Password</strong></label>
                                            <input type="password" name="txt3" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                        </div>
                                    </form>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
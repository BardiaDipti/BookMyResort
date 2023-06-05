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

	<title>Login</title>

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

                                    if ($_POST) {
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];
                                        $selectquery = mysqli_query($connection, "Select * from admin_tbl where admin_email='{$email}' and admin_password='{$password}'") or die(mysqli_error($connection));
                                        $count = mysqli_num_rows($selectquery);
                                        $row = mysqli_fetch_array($selectquery);

                                        if ($count > 0) {
                                            $_SESSION['Email'] = $row['admin_email'];
                                            $_SESSION['Password'] = $row['admin_password'];
                                            header("location:DASHBOARD.php");
                                        } 
                                        else {
                                            echo "<script>alert('Invalid Login Details!')</script>";
                                        }
                                    };
                                    ?>
                                    
                                    <form id="myform" method="POST">
                                        <strong>Email :</strong> <input type="email" name="email" class="form-control" required="true" placeholder="Enter email"><br>
                                        <strong>Password :</strong> <input type="<strong>Email :</strong>password" name="password" class="form-control" required="true" placeholder="Enter password">
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <a href="Password_Forgot.php">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                    </form>
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

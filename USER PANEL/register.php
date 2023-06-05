<?php 
require 'session-start.php';
require 'Database/connection.php';
if(isset($_POST["submit"]))
{
    $cust_fname= mysqli_real_escape_string($connection,$_POST["txt1"]);
    $cust_lname= mysqli_real_escape_string($connection,$_POST["txt2"]);
    $contact_no= mysqli_real_escape_string($connection,$_POST["txt3"]);
    $cust_email= mysqli_real_escape_string($connection,$_POST["txt4"]);
    $cust_password= mysqli_real_escape_string($connection,$_POST["txt5"]);
    $cust_identity_type= mysqli_real_escape_string($connection,$_POST["txt6"]);
    $cust_identity_no= mysqli_real_escape_string($connection,$_POST["txt7"]);
    
    $q_c = mysqli_query($connection,"SELECT * FROM `customer_tbl` WHERE `cust_email`='{$cust_email}'");
  $count=mysqli_num_rows($q_c);
  if($count>0)
  {
       echo "<script>alert('Email already exist!');window.location='register.php'</script>;";
  }
  else{
    $quey_ins = mysqli_query($connection,"INSERT INTO `customer_tbl`(`cust_password`, `cust_fname`, `cust_lname`, `contact_no`, `cust_email`, `cust_identity_type`, `cust_identity_no`, `cust_photo`) VALUES ('{$cust_password}','{$cust_fname}','{$cust_lname}','{$contact_no}','{$cust_email}','{$cust_identity_type}','{$cust_identity_no}','')");
    
    if($quey_ins){
    echo "<script>alert('Your registration successfully');window.location='login.php'</script>;";
    }
  }
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
                                    <form id="myform" action="register.php" method="post">
                                        <br><h1>REGISTER</h1>
                                        <br><div class="mb-3">
                                            <label class="mb-1"><strong>First Name</strong></label>
                                            <input type="text" name="txt1" class="form-control" placeholder="Enter first name" required>
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Last Name</strong></label>
                                            <input type="text" name="txt2" class="form-control" placeholder="Enter last name" required>
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Contact No</strong></label>
                                            <input type="tel" name="txt3" class="form-control" placeholder="Enter contact no" required>
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="txt4" class="form-control" placeholder="Enter email" required>
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="txt5" class="form-control" placeholder="Enter password" required>
                                        </div><br>
                                        <div class="mb-3">
                                            <label>Identity Type</label>
                                                   <select class="form-control form-white" name="txt6" required>
                                                        <option></option>
                                                        <option>Aadhar Card</option>
                                                        <option>Pan Card</option>
                                                        <option>Voter ID</option>
                                                        <option>Driving Licence</option>
                                                    </select>
                                        </div><br>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Identity Number</strong></label>
                                            <input type="text" name="txt7" class="form-control" placeholder="Enter password" required>
                                        </div><br>
                                        <div class="text-center mt-4">
                                            <button type="submit" name='submit' class="btn btn-primary btn-block">Sign Up</button>
                                        </div><br>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="login.php">Sign In</a></p>
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
    <!-- Validation -->
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
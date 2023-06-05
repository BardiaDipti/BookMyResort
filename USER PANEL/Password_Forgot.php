<?php

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$connection = new mysqli("localhost","root","","resort_db");
if($_POST)
{
    $email = $_POST['txt1'];
    $selectquery = mysqli_query($connection, "Select * from customer_tbl where cust_email='{$email}'") or die(mysqli_error($connection));
    $count = mysqli_num_rows($selectquery);
    $row = mysqli_fetch_array($selectquery);
    if($count>0)
    {
        
        //echo $row['cust_password'];
        //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'group04.bmr@gmail.com';                     //SMTP username
    $mail->Password   = 'resort04';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('group04.bmr@gmail.com', 'Dipti Priyanshi');
    $mail->addAddress($email, $email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'sdp presentation-2';
    $mail->Body    = "hi $email your password is {$row['cust_password']}";
    $mail->AltBody = "hi $email your password is {$row['cust_password']}";

    $mail->send();
    echo 'Email has been sent';
} catch (Exception $e) {
    echo "Email could not be sent.";
    echo " Mailer Error: {$mail->ErrorInfo}";
}

    }
    //echo $count; 
else {
    echo "<script> alert('Email not found');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
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
                                        <br><h1>Forgot Password</h1>
                                        <br><div class="mb-3">
                                            <label><strong>Email</strong></label>
                                            <input type="email" name="txt1" class="form-control" placeholder="bookmyresort04@gmail.com" required>
                                        </div><br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button><br><br>
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
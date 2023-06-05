<?php
require 'Database/connection.php';
if(isset($_POST['submit']))
{
    $password=mysqli_real_escape_string($connection,$_POST['password']);
    $fname=mysqli_real_escape_string($connection,$_POST['txt1']);
    $lname=mysqli_real_escape_string($connection,$_POST['txt2']);
    $contact_no=mysqli_real_escape_string($connection,$_POST['txt3']);
    $email_id=mysqli_real_escape_string($connection,$_POST['txt4']);
    $identity_type=mysqli_real_escape_string($connection,$_POST['txt5']);
    $identity_no=mysqli_real_escape_string($connection,$_POST['txt6']);
    $fileuploadpath="upload/".$_FILES['file123']['name'];
    
    $insertquery=mysqli_query($connection,"insert into customer_tbl(cust_password,cust_fname,cust_lname,contact_no,cust_email,cust_identity_type,cust_identity_no,cust_photo) values('{$password}', '{$fname}','{$lname}', '{$contact_no}', '{$email_id}' ,'{$identity_type}','{$identity_no}','{$fileuploadpath}')") or die(mysqli_error($connection));
    if($insertquery)
    {
        $fileprocess= move_uploaded_file($_FILES['file123']['tmp_name'],$fileuploadpath);
        if ($fileprocess)
        {
               echo "<script> alert('Account created succesfully!!);</script>";     
        }  
            else
            {}
    }
}
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>Signup</title>
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
    <link rel="icon" type="png" sizes="16x16" href="logo.png">
   <link rel="stylesheet" type="text/css" href="css/all-ie-only.css">
  </head>
 <body>
      <?php
        include 'sidebar.php';
        include 'header.php';
      ?>
      <form method="post" enctype="multipart/formdata"><br>
            First Name: <input type="text" name="txt1" placeholder="Enter First Name"><br><br>
            Last Name: <input type="text" name="txt2" placeholder="Enter Last Name"><br><br>
            Contact No: <input type="number" name="txt3" placeholder="Enter  Mobile Number"><br><br>
            Email Id: <input type="email" name="txt4" placeholder="Enter  Email Id"><br><br>
            Identity Type: <input type="text" name="txt5" placeholder="Enter  Identity Type"><br><br>
            Identity No: <input type="varchar" name="txt6" placeholder="Enter Identity Number"><br><br>
            Password: <input type="password" name="password" placeholder="Enter Password"><br><br>
            Photo: <input type="file" name="file123"><br><br>
            <input type="submit" name="submit"><br><br>              
        </form>
    </body>
</html>
<?php
include 'footer.php';
?>
   <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
   <script src="vendors/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/zebra_datepicker.js"></script>
   <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>

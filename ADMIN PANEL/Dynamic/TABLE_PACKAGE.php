<?php

require 'D:\SDP\ADMIN PANEL\Database\connection.php';
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>Packages</title>
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
      <div class="content-body" style="min-height: 884px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!--<div class="card-header">
                                <h4 class="card-title">Event Table</h4>
                            </div>-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Details</th>
                                                <th>Imagepath</th>
                                                <th>Price</th>
                                                <th>Category ID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
    if(isset($_GET['did']))
    {
        $did = $_GET['did'];
        $deleteq = mysqli_query($connection,"Delete From packages_tbl where package_id='{$did}'")or die(mysqli_error($connection));
    
        if($deleteq)
        {
            echo "<script>alert('Record Deleted Successfully!')</script>";
        }
    }

 
$sql = "SELECT
    `package_tbl`.`package_id`
    , `package_tbl`.`package_type`
    , `package_tbl`.`package_details`
    , `package_tbl`.`package_imagepath`
    , `package_tbl`.`package_price`
    , `category_tbl`.`category_type`
FROM
    `category_tbl`
    INNER JOIN `package_tbl` 
        ON (`category_tbl`.`category_id` = `package_tbl`.`category_id`);";
        
        $query = mysqli_query($connection,$sql) or die (mysqli_error($connection));
        while($row = mysqli_fetch_array($query))
        {
            echo "<tr>";
            echo "<td>{$row['package_id']} </td>";
            echo "<td>{$row['package_type']} </td>";
            echo "<td>{$row['package_details']} </td>";
            echo "<td><img src='Package/{$row['package_imagepath']}' width='150px;'/></td>";
            echo "<td>{$row['package_price']} </td>";
            echo "<td>{$row['category_type']} </td>"; 
            echo "<td>
        <a href='#' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
        <a href='TABLE_PACKAGE.php?did={$row['package_id']}' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a></td>";
            echo "</tr>";
        }
        ?>
         </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
		</div>
            </div>
        </div>
   <script src="vendor/global/global.min.js"></script>
        <script src="vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="vendor/apexchart/apexchart.js"></script>
        <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="js/plugins-init/datatables.init.js"></script>
        <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/dlabnav-init.js"></script>
        <script src="js/demo.js"></script>
        <script src="js/styleSwitcher.js"></script>
    <br>
      <?php
      include 'footer.php';
      ?>


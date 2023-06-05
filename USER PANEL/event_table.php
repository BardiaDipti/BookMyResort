<?php
    require 'Database/connection.php';
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>Events</title>
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
                                    <table id="example" class="display" style="min-width: 845px" border='1' cellpadding='5' cellspacing='3'>
                                        
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Date & Time</th>
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
        $deleteq = mysqli_query($connection,"Delete From event_tbl where event_id='{$did}'")or die(mysqli_error($connection));
    
        if($deleteq)
        {
            echo "<script>alert('Record Deleted Successfully!')</script>";
        }
    }

    //$selectq = mysqli_query($connection, "Select * From event_tbl")or die(mysqli_error($connection));

    $sql = "SELECT
    `event_tbl`.`event_id`
    , `event_tbl`.`event_type`
    , `event_tbl`.`event_date`
    , `event_tbl`.`event_details`
    , `event_tbl`.`event_imagepath`
    , `event_tbl`.`event_price`
    , `category_tbl`.`category_type`
FROM
    `category_tbl`
    INNER JOIN `event_tbl` 
        ON (`category_tbl`.`category_id` = `event_tbl`.`category_id`);";

$query = mysqli_query($connection, $sql) or die(mysqli_error($connection));

while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>{$row['event_id']} </td>";
    echo "<td>{$row['event_type']} </td>";
    echo "<td>{$row['event_date']} </td>";
    echo "<td>{$row['event_details']} </td>";
    echo "<td><img src='Event/{$row['event_imagepath']}' width='150px;'/></td>";
    echo "<td>{$row['event_price']} </td>";
    echo "<td>{$row['category_type']} </td>";
    echo "<td>
        <a href='#' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
        <a href='event_table.php?did={$row['event_id']}' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a></td>";
    echo "</tr>";
}
    
    /*while($eventrow = mysqli_fetch_array($selectq))
    {
        echo "<tr>";
        echo "<td>{$eventrow['event_id']}</td>";
        echo "<td>{$eventrow['event_type']}</td>";
        echo "<td>{$eventrow['event_date']}</td>";
        echo "<td>{$eventrow['event_details']}</td>";
        echo "<td><img src='Event/{$eventrow['event_imagepath']}' width='150px;'/></td>";
        echo "<td>{$eventrow['event_price']}</td>";
        echo "<td>{$eventrow['category_id']}</td>";
        echo "<td>
        <a href='#' class='btn btn-primary shadow btn-xs sharp me-1'><i class='fas fa-pencil-alt'></i></a>
        <a href='Table_Event.php?did={$eventrow['event_id']}' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a></td>";
        echo "</tr>";
    }*/
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

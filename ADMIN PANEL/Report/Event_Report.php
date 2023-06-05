<?php
$connection = mysqli_connect("localhost","root","","resort_db");
?>
<html>
    <body>
    <center><h4>Event Report</h4></center>
<?php
echo "Data :".date('d-m-y');

?>
    <form method="get">
        <?php
        
        $sql=mysqli_query($connection, "select * from event_tbl")or die(mysqli_error($connection));
        echo "<select name='eventid'>";
        while($row= mysqli_fetch_array($sql))
        {
           echo "<option value='{$row['event_id']}'>{$row['event_type']}</option>";
        }
        echo "</select>";
        ?>
        &nbsp; Price 1 : <input type="number" name="p1">
        &nbsp; Price 2 : <input type="number" name="p2">
        &nbsp;<input type="submit" value="Search">
    </form>
    <a href="#" onclick="window.print();">Print</a>
    <?php
    if(isset($_GET['eventid']))
    {
    $eventid=$_GET['eventid'];
    $eventq =mysqli_query($connection,"select * from event_tbl where event_id='{$eventid}'") or die(mysqli_error($connection));
    $count =mysqli_num_rows($eventq);
    echo "<br/>$count Records  Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Type</th>";
    echo "<th>Title</th>";
    echo "<th>Date & Time</th>";
    echo "<th>Details</th>";
    echo "<th>Imagepath</th>";
    echo "<th>Price</th>";
    echo "<th>Category ID</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($eventq)) 
    {
        $custq=mysqli_query($connection,"select * from event_tbl") or die(mysqli_error($connection));
        $custname=mysqli_fetch_array($eventq);
        echo "<tr>";
        echo "<td>{$row['event_id']}</td>";
        echo "<td>{$row['event_type']}</td>";
        echo "<td>{$row['event_title']}</td>";
        echo "<td>{$row['event_date']}</td>";
        echo "<td>{$row['event_details']}</td>";
        echo "<td>{$row['event_imagepath']}</td>";
        echo "<td>{$row['event_price']}</td>";
        echo "<td>{$row['category_id']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>

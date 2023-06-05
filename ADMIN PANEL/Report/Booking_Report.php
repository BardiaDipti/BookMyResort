<?php
$connection = mysqli_connect("localhost","root","","resort_db");
?>
<html>
    <body>
    <center><h4>Booking Report</h4></center>
<?php
echo "Data :".date('d-m-y');

?>
    <form method="get">
        <?php
        
        $sql=mysqli_query($connection, "select * from booking_tbl")or die(mysqli_error($connection));
        echo "<select name='bookingid'>";
        while($row= mysqli_fetch_array($sql))
        {
           echo "<option value='{$row['booking_id']}'>{$row['booking_details']}</option>";
        }
        echo "</select>";
        ?>
        <input type="submit" value="Search">
    </form>
    <a href="#" onclick="window.print();">Print</a>
    <?php
    if(isset($_GET['bookingid']))
    {
    $bookingid=$_GET['bookingid'];
    $bookingq =mysqli_query($connection,"select * from booking_tbl where booking_id='{$bookingid}'") or die(mysqli_error($connection));
    $count =mysqli_num_rows($bookingq);
    echo "<br/>$count Records  Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Details</th>";
    echo "<th>Date</th>";
    echo "<th>Customer ID</th>";
    echo "<th>Category ID</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($bookingq)) 
    {
        $bookq=mysqli_query($connection,"select * from booking_tbl") or die(mysqli_error($connection));
        $bookname=mysqli_fetch_array($bookingq);
        echo "<tr>";
        echo "<td>{$row['booking_id']}</td>";
        echo "<td>{$row['booking_details']}</td>";
        echo "<td>{$row['booking_date']}</td>";
        echo "<td>{$row['cust_id']}</td>";
        echo "<td>{$row['category_id']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>



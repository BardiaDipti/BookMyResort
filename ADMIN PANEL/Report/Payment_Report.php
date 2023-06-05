<?php
$connection = mysqli_connect("localhost","root","","resort_db");
?>
<html>
    <body>
    <center><h4>Payment Report</h4></center>
<?php
echo "Data :".date('d-m-y');

?>
    <form method="get">
        <?php
        
        $sql=mysqli_query($connection, "select * from payment_tbl")or die(mysqli_error($connection));
        echo "<select name='paymentid'>";
        while($row= mysqli_fetch_array($sql))
        {
           echo "<option value='{$row['payment_id']}'>{$row['payment_mode']}</option>";
        }
        echo "</select>"; 
        ?>
        &nbsp; Date : <input type="datetime-local" name="date">
        &nbsp;<input type="submit" value="Search">
    </form>
    <a href="#" onclick="window.print();">Print</a>
    <?php
    if(isset($_GET['paymentid']))
    {
    $paymentid=$_GET['paymentid'];
    $paymentq =mysqli_query($connection,"select * from payment_tbl where payment_id='{$paymentid}'") or die(mysqli_error($connection));
    $count =mysqli_num_rows($paymentq);
    echo "<br/>$count Records  Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Mode</th>";
    echo "<th>Date</th>";
    echo "<th>Details</th>";
    echo "<th>Status</th>";
    echo "<th>Customer ID</th>";
    echo "<th>Booking ID</th>";
    echo "<th>Order NO</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($paymentq)) 
    {
        $pq=mysqli_query($connection,"select * from payment_tbl") or die(mysqli_error($connection));
        $ptype=mysqli_fetch_array($paymentq);
        echo "<tr>";
        echo "<td>{$row['payment_id']}</td>";
        echo "<td>{$row['payment_mode']}</td>";
        echo "<td>{$row['payment_date']}</td>";
        echo "<td>{$row['payment_details']}</td>";
        echo "<td>{$row['payment_status']}</td>";
        echo "<td>{$row['cust_id']}</td>";
        echo "<td>{$row['booking_id']}</td>";
        echo "<td>{$row['order_no']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>



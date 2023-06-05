<?php
$connection = mysqli_connect("localhost","root","","resort_db");
?>
<html>
    <body>
    <center><h4>Order Report</h4></center>
<?php
echo "Data :".date('d-m-y');

?>
    <form method="get">
        <?php
        
        $sql=mysqli_query($connection, "select * from order_tbl")or die(mysqli_error($connection));
        echo "<select name='orderno'>";
        while($row= mysqli_fetch_array($sql))
        {
           echo "<option value='{$row['order_no']}'>{$row['order_type']}</option>";
        }
        echo "</select>";
        ?>
        <input type="submit" value="Search">
    </form>
    <a href="#" onclick="window.print();">Print</a>
    <?php
    if(isset($_GET['orderno']))
    {
    $orderno=$_GET['orderno'];
    $orderq =mysqli_query($connection,"select * from order_tbl where order_no='{$orderno}'") or die(mysqli_error($connection));
    $count =mysqli_num_rows($orderq);
    echo "<br/>$count Records  Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>NO.</th>";
    echo "<th>Type</th>";
    echo "<th>Details</th>";
    echo "<th>Date</th>";
    echo "<th>Menu ID</th>";
    echo "<th>Customer ID</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($orderq)) 
    {
        $oq=mysqli_query($connection,"select * from order_tbl") or die(mysqli_error($connection));
        $oname=mysqli_fetch_array($orderq);
        echo "<tr>";
        echo "<td>{$row['order_no']}</td>";
        echo "<td>{$row['order_type']}</td>";
        echo "<td>{$row['order_details']}</td>";
        echo "<td>{$row['order_date']}</td>";
        echo "<td>{$row['menu_id']}</td>";
        echo "<td>{$row['cust_id']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>



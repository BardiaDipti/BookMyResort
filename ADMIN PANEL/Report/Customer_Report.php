<?php
$connection = mysqli_connect("localhost","root","","resort_db");
?>
<html>
    <body>
    <center><h4>Customer Report</h4></center>
<?php
echo "Data :".date('d-m-y');

?>
    <form method="get">
        <?php
        
        $sql=mysqli_query($connection, "select * from customer_tbl")or die(mysqli_error($connection));
        echo "<select name='custid'>";
        while($row= mysqli_fetch_array($sql))
        {
           echo "<option value='{$row['cust_id']}'>{$row['cust_fname']}</option>";
        }
        echo "</select>";
        ?>
        
        Last name : <input type="text" name="lname">
        <input type="submit" value="Search">
    </form>
    <a href="#" onclick="window.print();">Print</a>
    <?php
    if(isset($_GET['custid']))
    {
    $custid=$_GET['custid'];
    $customerq =mysqli_query($connection,"select * from customer_tbl where cust_id='{$custid}'") or die(mysqli_error($connection));
    $count =mysqli_num_rows($customerq);
    echo "<br/>$count Records  Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Password</th>";
    echo "<th>Firstname</th>";
    echo "<th>Lastname</th>";
    echo "<th>Contact_no</th>";
    echo "<th>Email</th>";
    echo "<th>Identity_type</th>";
    echo "<th>Identity_no</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($customerq)) 
    {
        $custq=mysqli_query($connection,"select * from customer_tbl") or die(mysqli_error($connection));
        $custname=mysqli_fetch_array($custq);
        echo "<tr>";
        echo "<td>{$row['cust_id']}</td>";
        echo "<td>{$row['cust_password']}</td>";
        echo "<td>{$row['cust_fname']}</td>";
        echo "<td>{$row['cust_lname']}</td>";
        echo "<td>{$row['contact_no']}</td>";
        echo "<td>{$row['cust_email']}</td>";
        echo "<td>{$row['cust_identity_type']}</td>";
        echo "<td>{$row['cust_identity_no']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>

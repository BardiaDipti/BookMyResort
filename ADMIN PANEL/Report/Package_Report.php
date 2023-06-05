<?php
$connection = mysqli_connect("localhost","root","","resort_db");
?>
<html>
    <body>
    <center><h4>Package Report</h4></center>
<?php
echo "Data :".date('d-m-y');

?>
    <form method="get">
        <?php
        
        $sql=mysqli_query($connection, "select * from Package_tbl")or die(mysqli_error($connection));
        echo "<select name='packageid'>";
        while($row= mysqli_fetch_array($sql))
        {
           echo "<option value='{$row['package_id']}'>{$row['package_type']}</option>";
        }
        echo "</select>";
        ?>
        &nbsp; Price 1 : <input type="number" name="p1">
        &nbsp; Price 2 : <input type="number" name="p2">
        &nbsp;<input type="submit" value="Search">
    </form>
    <a href="#" onclick="window.print();">Print</a>
    <?php
    if(isset($_GET['packageid']))
    {
    $packageid=$_GET['packageid'];
    $packageq =mysqli_query($connection,"select * from package_tbl where package_id='{$packageid}'") or die(mysqli_error($connection));
    $count =mysqli_num_rows($packageq);
    echo "<br/>$count Records  Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Type</th>";
    echo "<th>Title</th>";
    echo "<th>Details</th>";
    echo "<th>Imagepath</th>";
    echo "<th>Price</th>";
    echo "<th>Category_id</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($packageq)) 
    {
        $packq=mysqli_query($connection,"select * from package_tbl") or die(mysqli_error($connection));
        $packname=mysqli_fetch_array($packageq);
        echo "<tr>";
        echo "<td>{$row['package_id']}</td>";
        echo "<td>{$row['package_type']}</td>";
        echo "<td>{$row['package_title']}</td>";
        echo "<td>{$row['package_details']}</td>";
        echo "<td>{$row['package_imagepath']}</td>";
        echo "<td>{$row['package_price']}</td>";
        echo "<td>{$row['category_id']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>



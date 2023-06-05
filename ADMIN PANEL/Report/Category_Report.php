<?php
$connection = mysqli_connect("localhost","root","","resort_db");
?>
<html>
    <body>
    <center><h4>Category Report</h4></center>
<?php
echo "Data :".date('d-m-y');

?>
    <form method="get">
        <?php
        
        $sql=mysqli_query($connection, "select * from category_tbl")or die(mysqli_error($connection));
        echo "<select name='catid'>";
        while($row= mysqli_fetch_array($sql))
        {
            echo "<option value='{$row['category_id']}'>{$row['category_type']}</option>";
        }
        echo "</select>";
        ?>
        <input type="submit" value="Search">
    </form>
    <a href="#" onclick="window.print();">Print</a>
    <?php
    if(isset($_GET['catid']))
    {
        $catid=$_GET['catid'];
    $categoryq =mysqli_query($connection,"select * from category_tbl where category_id='{$catid}'") or die(mysqli_error($connection));
    $count =mysqli_num_rows($categoryq);
    echo "<br/>$count Records  Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Category Type</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($categoryq)) 
    {
        $catq=mysqli_query($connection,"select * from category_tbl") or die(mysqli_error($connection));
        $cattype=mysqli_fetch_array($catq);
        echo "<tr>";
        echo "<td>{$row['category_id']}</td>";
        echo "<td>{$row['category_type']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>

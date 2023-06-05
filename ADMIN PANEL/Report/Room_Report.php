<?php
$connection = mysqli_connect("localhost","root","","resort_db");
?>
<html>
    <body>
    <center><h4>Room Report</h4></center>
<?php
echo "Data :".date('d-m-y');

?>
    <form method="get">
        <?php
        
        $sql=mysqli_query($connection, "select * from room_tbl")or die(mysqli_error($connection));
        echo "<select name='roomid'>";
        while($row= mysqli_fetch_array($sql))
        {
           echo "<option value='{$row['room_id']}'>{$row['room_type']}</option>";
        }
        echo "</select>"; 
        ?>
        &nbsp; Price 1 : <input type="number" name="p1">
        &nbsp; Price 2 : <input type="number" name="p2">
        &nbsp;<input type="submit" value="Search">
    </form>
    <a href="#" onclick="window.print();">Print</a>
    <?php
    if(isset($_GET['roomid']))
    {
    $roomid=$_GET['roomid'];
    $roomq =mysqli_query($connection,"select * from room_tbl where room_id='{$roomid}'") or die(mysqli_error($connection));
    $count =mysqli_num_rows($roomq);
    echo "<br/>$count Records  Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Type</th>";
    echo "<th>Title</th>";
    echo "<th>Details</th>";
    echo "<th>Imagepath</th>";
    echo "<th>Price</th>";
    echo "<th>Category id</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($roomq)) 
    {
        $rq=mysqli_query($connection,"select * from room_tbl") or die(mysqli_error($connection));
        $rtype=mysqli_fetch_array($roomq);
        echo "<tr>";
        echo "<td>{$row['room_id']}</td>";
        echo "<td>{$row['room_type']}</td>";
        echo "<td>{$row['room_title']}</td>";
        echo "<td>{$row['room_details']}</td>";
        echo "<td>{$row['room_imagepath']}</td>";
        echo "<td>{$row['room_price']}</td>";
        echo "<td>{$row['category_id']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>



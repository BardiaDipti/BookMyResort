<?php
$connection = mysqli_connect("localhost","root","","resort_db");
?>
<html>
    <body>
    <center><h4>Menu Report</h4></center>
<?php
echo "Data :".date('d-m-y');

?>
    <form method="get">
        <?php
        
        $sql=mysqli_query($connection, "select * from menu_tbl")or die(mysqli_error($connection));
        echo "<select name='menuid'>";
        while($row= mysqli_fetch_array($sql))
        {
           echo "<option value='{$row['menu_id']}'>{$row['menu_item']}</option>";
        }
        echo "</select>";
        ?>
        <input type="submit" value="Search">
    </form>
    <a href="#" onclick="window.print();">Print</a>
    <?php
    if(isset($_GET['menuid']))
    {
    $menuid=$_GET['menuid'];
    $menuq =mysqli_query($connection,"select * from menu_tbl where menu_id='{$menuid}'") or die(mysqli_error($connection));
    $count =mysqli_num_rows($menuq);
    echo "<br/>$count Records  Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Item</th>";
    echo "<th>Price</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($menuq)) 
    {
        $mq=mysqli_query($connection,"select * from menu_tbl") or die(mysqli_error($connection));
        $mname=mysqli_fetch_array($menuq);
        echo "<tr>";
        echo "<td>{$row['menu_id']}</td>";
        echo "<td>{$row['menu_item']}</td>";
        echo "<td>{$row['price']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>



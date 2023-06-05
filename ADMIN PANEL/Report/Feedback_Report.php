<?php
$connection = mysqli_connect("localhost","root","","resort_db");
?>
<html>
    <body>
    <center><h4>Feedback Report</h4></center>
<?php
echo "Data :".date('d-m-y');

?>
    <form method="get">
        <?php
        
        $sql=mysqli_query($connection, "select * from feedback_tbl")or die(mysqli_error($connection));
        echo "<select name='feedbackid'>";
        while($row= mysqli_fetch_array($sql))
        {
           echo "<option value='{$row['feedback_id']}'>{$row['ratings']}</option>";
        }
        echo "</select>";
        ?>
        <input type="submit" value="Search">
    </form>
    <a href="#" onclick="window.print();">Print</a>
    <?php
    if(isset($_GET['feedbackid']))
    {
    $feedbackid=$_GET['feedbackid'];
    $feedbackq =mysqli_query($connection,"select * from feedback_tbl where feedback_id='{$feedbackid}'") or die(mysqli_error($connection));
    $count =mysqli_num_rows($feedbackq);
    echo "<br/>$count Records  Found";
    echo "<table border='1' align='center'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Date</th>";
    echo "<th>Details</th>";
    echo "<th>Ratings</th>";
    echo "<th>Customer ID</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($feedbackq)) 
    {
        $fq=mysqli_query($connection,"select * from feedback_tbl") or die(mysqli_error($connection));
        $fname=mysqli_fetch_array($feedbackq);
        echo "<tr>";
        echo "<td>{$row['feedback_id']}</td>";
        echo "<td>{$row['feedback_date']}</td>";
        echo "<td>{$row['feedback_details']}</td>";
        echo "<td>{$row['ratings']}</td>";
        echo "<td>{$row['cust_id']}</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    ?>
</body>
</html>




<?php

require 'connection.php';

$sql = "SELECT
    `event_tbl`.`event_id`
    , `event_tbl`.`event_type`
    , `event_tbl`.`event_date`
    , `event_tbl`.`event_details`
    , `event_tbl`.`event_imagepath`
    , `event_tbl`.`event_price`
    , `category_tbl`.`category_type`
FROM
    `category_tbl`
    INNER JOIN `event_tbl` 
        ON (`category_tbl`.`category_id` = `event_tbl`.`category_id`);";

$query = mysqli_query($connection, $sql) or die(mysqli_error($connection));
echo "<table border='1' cellpadding='5' cellspacing='3'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Type</th>";
echo "<th>Date & Time</th>";
echo "<th>Details</th>";
echo "<th>Imagepath</th>";
echo "<th>Price</th>";
echo "<th>Category</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>{$row['event_id']} </td>";
    echo "<td>{$row['event_type']} </td>";
    echo "<td>{$row['event_date']} </td>";
    echo "<td>{$row['event_details']} </td>";
    echo "<td><img src='Event/{$row['event_imagepath']}' width='150px;'/></td>";
    echo "<td>{$row['event_price']} </td>";
    echo "<td>{$row['category_type']} </td>";
    echo "</tr>";
}
echo "</table>";
?>
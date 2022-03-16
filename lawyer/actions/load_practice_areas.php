<?php
session_start();
include '../../includes/conn.php';

$sql = "SELECT * FROM practice_area";

$query = mysqli_query($con, $sql) or die("Query Unsuccessful.");

$str = "";
while ($row = mysqli_fetch_assoc($query)) {
    $str .= "<option value='{$row['id']}'>{$row['service_area']}</option>";
}

echo $str;

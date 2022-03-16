<?php
session_start();
include '../../includes/conn.php';

if (isset($_POST['delete_btn_set'])) {
    $del_id = $_POST['delete_id'];
    $query = "DELETE FROM subscribe WHERE id='$del_id'";
    $result = mysqli_query($con, $query);
}

//extract($_GET);
// $id = $_GET['id'];

// if ($_GET["id"]) {
//     $query = "DELETE FROM subscribe WHERE id='$id'";
//     $result = mysqli_query($con, $query);
//     print_r($query);
//     // Check the result and post confirm message
//     header('Location:../review-subscribers.php');
// }
/*else {
	mysqli_errorno($result);
}*/

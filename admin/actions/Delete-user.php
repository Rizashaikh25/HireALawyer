<?php
session_start();
include '../../includes/conn.php';

if (isset($_POST['delete_btn_set'])) {
    $del_id = $_POST['delete_id'];
    $query = "DELETE FROM users WHERE user_id='$del_id'";
    $result = mysqli_query($con, $query);
}

//extract($_GET);
// $id = $_GET['id'];
// print_r($id);

// if ($_GET["id"]) {
//     $query = "DELETE FROM users WHERE user_id='$id'";
//     $result = mysqli_query($con, $query);
//     print_r($query);
//     // Check the result and post confirm message
//     header('Location:../users.php');

// }
/*else {
	mysqli_errorno($result);
}*/

<?php
session_start();
include '../../includes/conn.php';

if (isset($_POST['delete_btn_set'])) {
    $del_id = $_POST['delete_id'];
    $query = "DELETE FROM contact_us WHERE id='$del_id'";
    $result = mysqli_query($con, $query);
}

// if (isset($_POST['delete_btn'])) {
//     $id = $_POST['delete_id'];
//     $query = "DELETE FROM contact_us WHERE id='$id'";
//     $result = mysqli_query($con, $query);

//     if ($result) {
//         $_SESSION['stat'] = "Contact details deleted successfully";
//         $_SESSION['status_code'] = "success";
//         header('Location:../review-contact-details.php');
//     } else {
//         $_SESSION['stat'] = "Contact details not deleted ";
//         $_SESSION['status_code'] = "error";
//         header('Location:../review-contact-details.php');
//         // mysqli_error($result);
//     }
// }

// extract($_GET);
// $id = $_GET['id'];

// if ($_GET["id"]) {
//     $query = "DELETE FROM contact_us WHERE id='$id'";
//     $result = mysqli_query($con, $query);
//     // print_r($query);
//     // Check the result and post confirm message
//     if ($result) {
//         $_SESSION['stat'] = "Contact details deleted successfully";
//         $_SESSION['status_code'] = "success";
//         header('Location:../review-contact-details.php');
//     } else {
//         $_SESSION['stat'] = "Contact details not deleted ";
//         $_SESSION['status_code'] = "error";
//         header('Location:../review-contact-details.php');
//         // mysqli_error($result);
//     }
// }

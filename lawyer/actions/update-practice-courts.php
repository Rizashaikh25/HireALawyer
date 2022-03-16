<?php
session_start();
include '../../includes/conn.php';
// extract($_POST);

if (isset($_POST['submit'])) {
    $nid = $_SESSION['id'];
    $b = $_POST['practice_courts'];
    $practice_courts_u = implode(",", $b);
    $update = "UPDATE lawyer SET practice_courts='$practice_courts_u' WHERE id='$nid'";
    $run_update = mysqli_query($con, $update);

    if ($run_update) {
        $_SESSION['stat'] = "Details Updated Successfully";
        $_SESSION['status_code'] = "error";
        header("Location: ../Practice-courts");
    } else {
        $_SESSION['stat'] = "Something Went Wrong";
        $_SESSION['status_code'] = "error";
        header("Location: ../Practice-courts");
    }
}

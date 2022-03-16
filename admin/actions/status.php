<?php
session_start();
include '../../includes/conn.php';
// extract($_POST);
if (isset($_POST['submit']))
	$id = mysqli_real_escape_string($con, $_POST['id']);
$status = mysqli_real_escape_string($con, $_POST['Status']);

$query = "UPDATE  lawyer SET 
		 `status` = '$status'	
		  WHERE id= '$id' ";

if (mysqli_query($con, $query)) {
	$_SESSION['stat'] = "Details Updated Successfully";
	$_SESSION['status_code'] = "success";
	header('Location:../new-lawyers');
} else {
	$_SESSION['stat'] = "Something went wrong";
	$_SESSION['status_code'] = "error";
	header('Location:../new-lawyers');
}

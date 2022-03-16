<?php
session_start();
include '../includes/conn.php';
// extract($_POST);

if (isset($_POST['check_submit_btn'])) {
	$email = $_POST['email_id'];
	$email_query = "select * from subscribe where email ='$email' ";
	$email_query_run = mysqli_query($con, $email_query);
	if (mysqli_num_rows($email_query_run) > 0) {
		echo "Email Already Exists";
	}
}

if (isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($con, $_POST['email']);
	// $emailquery = "select * from subscribe where email ='$email'";
	// $query = mysqli_query($con, $emailquery);
	// $emailcount = mysqli_num_rows($query);
	// if ($emailcount > 0) {
	// 	echo "email already exists";
	// } else {
	$insertquery = "INSERT INTO subscribe (email) VALUES ('$email')";
	if (mysqli_query($con, $insertquery)) {
		$_SESSION['stat'] = "You are now subscriber";
		$_SESSION['status_code'] = "success";
		echo '<script> window.history.back()</script>';
	} else {
		$_SESSION['stat'] = "Something went wrong";
		$_SESSION['status_code'] = "error";
		echo '<script> window.history.back()</script>';
	}
}

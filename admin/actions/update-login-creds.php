<?php
session_start();
include '../../includes/conn.php';

if (isset($_POST['submit']))
	$name = mysqli_real_escape_string($con, $_POST['name']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$admin_username = mysqli_real_escape_string($con, $_POST['admin_username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, md5($_POST['password']));
$security_question = mysqli_real_escape_string($con, $_POST['security_question']);
$security_answer = mysqli_real_escape_string($con, $_POST['security_answer']);

$query = "UPDATE  admin SET 
		 `name` ='$name',
		 `contact` ='$contact',
		 `admin_username` = '$admin_username',
		 `email` = '$email',
		 `password` = '$password',
		 `security_question` = '$security_question',
         `security_answer` = '$security_answer'	
		WHERE id= 1";

if (mysqli_query($con, $query)) {
	$_SESSION['stat'] = "Credentials Updated Successfully";
	$_SESSION['status_code'] = "success";
	header('Location:../update-login-creds.php');
} else {
	$_SESSION['stat'] = "Something Went Wrong";
	$_SESSION['status_code'] = "error";
	header('Location:../update-login-creds.php');
}

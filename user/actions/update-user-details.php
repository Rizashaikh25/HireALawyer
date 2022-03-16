<?php
session_start();
include '../../includes/conn.php';
if (isset($_POST['update']))
	$uid = $_SESSION['user_id'];
	$user_fname = mysqli_real_escape_string($con, $_POST['user_fname']);
	$user_lname = mysqli_real_escape_string($con, $_POST['user_lname']);
	$contact_no = mysqli_real_escape_string($con, $_POST['contact_no']);
	$UserGender = mysqli_real_escape_string($con, $_POST['UserGender']);
	$UserAddress = mysqli_real_escape_string($con, $_POST['UserAddress']);
	$UserCity = mysqli_real_escape_string($con, $_POST['UserCity']);
	$UserState = mysqli_real_escape_string($con, $_POST['UserState']);
	$UserZip = mysqli_real_escape_string($con, $_POST['UserZip']);
	$username = mysqli_real_escape_string($con, $_POST['username']);

$query = "UPDATE  users SET 
		 `user_fname` ='$user_fname',
		 `user_lname` ='$user_lname',
		 `contact_no` ='$contact_no',
		 `UserGender` ='$UserGender',
		 `UserAddress` ='$UserAddress',
		 `UserCity` ='$UserCity',
		 `UserState` ='$UserState',
		 `UserZip` ='$UserZip',
		 `username` ='$username'
		  WHERE user_id= '$uid' ";

if (mysqli_query($con, $query)) {
	$_SESSION['stat'] = "Details Updated Successfully";
	$_SESSION['status_code'] = "error";
	header('Location:../Personal-details.php');
} else {
	$_SESSION['stat'] = "Something went wrong";
	$_SESSION['status_code'] = "error";
	header('Location:../Personal-details.php');
}

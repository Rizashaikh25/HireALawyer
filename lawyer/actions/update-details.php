<?php
session_start();
include '../../includes/conn.php';
// extract($_POST);
// print_r($_SESSION['id']);
if (isset($_POST['submit']))
	$nid = $_SESSION['id'];
$LawyerName = mysqli_real_escape_string($con, $_POST['lawyer_name']);
$lawyer_number = mysqli_real_escape_string($con, $_POST['lawyer_number']);
$LawyerGender = mysqli_real_escape_string($con, $_POST['LawyerGender']);
$LawyerAddress = mysqli_real_escape_string($con, $_POST['LawyerAddress']);
$LawyerCity = mysqli_real_escape_string($con, $_POST['LawyerCity']);
$LawyerState = mysqli_real_escape_string($con, $_POST['LawyerState']);
$LawyerZip = mysqli_real_escape_string($con, $_POST['LawyerZip']);
$LawyerLicenseNumber = mysqli_real_escape_string($con, $_POST['LawyerLicenseNumber']);
$BarCouncilDate = mysqli_real_escape_string($con, $_POST['BarCouncilDate']);
$LawyerAboutMe = mysqli_real_escape_string($con, $_POST['LawyerAboutMe']);
$LawyerAwards = mysqli_real_escape_string($con, $_POST['LawyerAwards']);
$Lawyerimgfile = $_FILES["LawyerImage"]["name"];
// get the image extension
$extension = substr($Lawyerimgfile, strlen($Lawyerimgfile) - 4, strlen($Lawyerimgfile));
// allowed extensions
$allowed_extensions = array(".jpg", "jpeg", ".png");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if (!in_array($extension, $allowed_extensions)) {
	header("Location: ../Personal-details");
	echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
} else {
	//rename the image file
	$LawyerImage = md5($Lawyerimgfile) . $extension;
	// Code for move image into directory
	move_uploaded_file($_FILES["LawyerImage"]["tmp_name"], "../lawyerphotos/" . $LawyerImage);
}

$query = "UPDATE  lawyer SET 
		 `lawyer_name` ='$LawyerName',
		 `lawyer_number` ='$lawyer_number',
		 `LawyerGender` ='$LawyerGender',
		 `LawyerAddress` ='$LawyerAddress',
		 `LawyerCity` ='$LawyerCity',
		 `LawyerState` ='$LawyerState',
		 `LawyerZip` ='$LawyerZip',
		 `LawyerLicenseNumber` ='$LawyerLicenseNumber',
		 `BarCouncilDate` ='$BarCouncilDate',
		 `LawyerAboutMe` = '$LawyerAboutMe',
		 `LawyerAwards` ='$LawyerAwards',
		 `LawyerImage` = '$LawyerImage'	
		  WHERE id= '$nid' ";

if (mysqli_query($con, $query)) {
	$_SESSION['stat'] = "Details Updated Successfully";
	$_SESSION['status_code'] = "error";
	header('Location:../Personal-details.php');
} else {
	$_SESSION['stat'] = "Something went wrong";
	$_SESSION['status_code'] = "error";
	header('Location:../Personal-details.php');
}

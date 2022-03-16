<?php
session_start();
include '../../includes/conn.php';

if (isset($_POST['submit']))
	$Number1 = mysqli_real_escape_string($con, $_POST['Number1']);
$Number2 = mysqli_real_escape_string($con, $_POST['Number2']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$About_Us = mysqli_real_escape_string($con, $_POST['About_Us']);
$Mission = mysqli_real_escape_string($con, $_POST['Mission']);

$query = "UPDATE  basic_details SET 
		 `Numbers1` ='$Number1',
		 `number2` ='$Number2',
		 `email` = '$email',
		 `address` = '$address',
		 `About_Us` = '$About_Us',
		 `Mission` = '$Mission'	
		WHERE id= 1 ";

if (mysqli_query($con, $query)) {
	$_SESSION['stat'] = "Details Updated Successfully";
	$_SESSION['status_code'] = "success";
	header('Location:../basic-details.php');
} else {
	$_SESSION['stat'] = "Something went wrong";
	$_SESSION['status_code'] = "error";
	header('Location:../basic-details.php');
}

// AJAX CODE- 
// if (isset($_POST['delete_btn_set'])) {
// 	$del_id = $_POST['delete_id'];
// 	$query = "UPDATE  basic_details SET 
// 	 		 `Numbers1` ='$Number1',
// 	 		 `number2` ='$Number2',
// 	 		 `email` = '$email',
// 	 		 `address` = '$address',
// 	 		 `About_Us` = '$About_Us',
// 	 		 `Mission` = '$Mission'	
// 	 		WHERE id= '$del_id' ";
// 	$result = mysqli_query($con, $query);
// }

// Original Code

/*echo "<pre>";
print_r($_POST);*/
// extract($_POST);

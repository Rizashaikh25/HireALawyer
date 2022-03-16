<?php
//error_reporting(0);

include '../includes/conn.php';
extract($_POST);
//if (isset($_POST['submit'])) {

// Inserting form values
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$service_name = mysqli_real_escape_string($con, $_POST['service_name']);
$message = mysqli_real_escape_string($con, $_POST['message']);


$imgfile = $_FILES["photo"]["name"];
// get the image extension
$extension = substr($imgfile, strlen($imgfile) - 4, strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg", "jpeg", ".png");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if (!in_array($extension, $allowed_extensions)) {
	header("Location: ../service-request");
	echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
} else {
	//rename the image file
	$imgnewfile = md5($imgfile) . $extension;
	// Code for move image into directory
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../photos/" . $imgnewfile);
}
$query = "INSERT INTO service_req(name, email, service_name, message, photo) VALUES ('$name', '$email', '$service_name','$message', '$imgnewfile')";

if (mysqli_query($con, $query)) {
	header("Location: ../service-reuest");
} else {
	header("Location: ../contact-us");
}















	
//move_uploaded_file($temp_name, $folder);


		/*// Execute query
		if (mysqli_query($con, $query) AND move_uploaded_file($tempname, $folder)) 
		{
  				header('Location:../contact-us');

			} ;*/
		

/*if (move_uploaded_file($tmp_name, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
*/

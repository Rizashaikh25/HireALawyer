<?php 
include'../includes/conn.php';
extract($_POST);

$name = mysqli_real_escape_string($con, $_POST['name']);
$number = mysqli_real_escape_string($con, $_POST['number']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$paw = mysqli_real_escape_string($con, $_POST['paw']);
$paw = md5($paw);
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/

$checkemail = "select * from lawyer where email ='$email'";
$query = mysqli_query($con,$checkemail);
$emailcount = mysqli_num_rows($query);

if($emailcount > 0){
	
	echo "email already exists";
}else{
	
$query = "INSERT INTO lawyer (name, number, email, paw, status) VALUES ('$name', '$email', '$email','$paw', 'Pending' )";

if (mysqli_query($con, $query)) {
  	header('Location:../contact-us.php');

} 

}

?>
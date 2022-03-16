<?php
session_start();
include '../includes/conn.php';
// extract($_POST);
// if (isset($_POST['check_submit_btn'])) {
// 	$email = $_POST['email_id'];
// 	$email_query = "select * from contact_us where email ='$email' ";
// 	$email_query_run = mysqli_query($con, $email_query);
// 	if (mysqli_num_rows($email_query_run) > 0) {
// 		echo "Email Already Exists";
// 	}
// }

if (isset($_POST['submit'])) {
	
	$url = "https://www.google.com/recaptcha/api/siteverify";
	$data = [
		'secret' => "6LdRZ3IdAAAAAPFDkgbiq-tKyk7XYlS_U0IIvMA8",
		'response' => $_POST['token'],
		'remoteip' => $_SERVER['REMOTE_ADDR']
	];

	$options = array(
		'http' => array(
		  'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		  'method'  => 'POST',
		  'content' => http_build_query($data)
		)
	  );

	$context  = stream_context_create($options);
	  $response = file_get_contents($url, false, $context);

	$res = json_decode($response, true);

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$subject = mysqli_real_escape_string($con, $_POST['subject']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	
	$query = "INSERT INTO contact_us (name, email, subject, message) VALUES ('$name', '$email', '$subject','$message' )";
	if($res['success'] == false) {

		echo '<div class="alert alert-warning">
				  <strong>Error!</strong> You are not a human.
			  </div>';
	
	}
	elseif (mysqli_query($con, $query)) {
		$_SESSION['stat'] = "Your message was sent successfullfy";
		$_SESSION['status_code'] = "success";
		header('Location:../contact-us');
	} else {
		$_SESSION['stat'] = "Something went wrong";
		$_SESSION['status_code'] = "error";
		header('Location:../contact-us');
	}
}
?>
<script src="https://www.google.com/recaptcha/api.js?render=6LdRZ3IdAAAAAGWMp79S8XNfr5W0czQip99oCgMW"></script>
<script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LdRZ3IdAAAAAGWMp79S8XNfr5W0czQip99oCgMW', {action: 'homepage'}).then(function(token) {
         console.log(token);
         document.getElementById("token").value = token;
      });
  });
  </script>
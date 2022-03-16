<?php
session_start();
?>
<?php

if (isset($_POST['submit'])) {
    include '../includes/conn.php';

    $email = mysqli_real_escape_string($con, $_POST['email']);

    $emailquery = "select * from users where email ='$email' ";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if ($emailcount) {

        $userdata = mysqli_fetch_assoc($query);

        $username = $userdata['username'];
        $token = $userdata['token'];

        $subject = "Password Reset";
        $body = "Hi, $username. Click here to reset your password 
            http://localhost/law/reset-password.php?token=$token";
        $sender_email = "From: hussainsp15@gmail.com";

        if (mail($email, $subject, $body, $sender_email)) {
            $_SESSION['msg'] = "check your mail to reset your password $email";
            header('location: ../user-login');
        } else {
            echo "Email sending failed...";
        }
    } else {
        echo "No email found";
    }
}
?>
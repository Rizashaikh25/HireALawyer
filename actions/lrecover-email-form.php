<?php
session_start();
?>
<?php

if (isset($_POST['submit'])) {
    include '../includes/conn.php';

    $lawyer_email = mysqli_real_escape_string($con, $_POST['lawyer_email']);

    $emailquery = "select * from lawyer where lawyer_email ='$lawyer_email' ";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if ($emailcount) {

        $userdata = mysqli_fetch_assoc($query);

        $lawyer_name = $userdata['lawyer_name'];
        $ltoken = $userdata['ltoken'];

        $subject = "Password Reset";
        $body = "Hi, $lawyer_name. Click here to reset your password 
            http://localhost/law/lreset-password.php?ltoken=$ltoken";
        $sender_email = "From: hussainsp15@gmail.com";

        if (mail($lawyer_email, $subject, $body, $sender_email)) {
            $_SESSION['lmsg'] = "check your mail to reset your password $lawyer_email";
            header('location: ../login-lawyer');
        } else {
            echo "Email sending failed...";
        }
    } else {
        echo "No email found";
    }
}
?>
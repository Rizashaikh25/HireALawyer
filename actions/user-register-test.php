<?php
session_start();
include '../includes/conn.php';

if (isset($_POST['check_submit_btn'])) {
    $email = $_POST['email_id'];
    $email_query = "select * from users where email ='$email' ";
    $email_query_run = mysqli_query($con, $email_query);
    if (mysqli_num_rows($email_query_run) > 0) {
        echo "Email Already Exists";
    }
}


if (isset($_POST['submit'])) {

    $user_fname = mysqli_real_escape_string($con, $_POST['user_fname']);
    $user_lname = mysqli_real_escape_string($con, $_POST['user_lname']);
    $contact_no = mysqli_real_escape_string($con, $_POST['contact_no']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    // $emailquery = "select * from users where email ='$email' ";
    // $query = mysqli_query($con, $emailquery);

    // $emailcount = mysqli_num_rows($query);

    // if ($emailcount > 0) {
    //     // $_SESSION['stat'] = "Email Already Exists";
    //     // $_SESSION['status_code'] = "error";
    //     // header('location: ../user-register');
    //     // echo '<div class="alert alert-danger">Email Address Already Exists.</div>';
    // }
    //  else {
    //     if ($password === $cpassword) {

    $insertquery = "insert into users(user_fname, user_lname, contact_no, email, username, password, cpassword,token, status) values('$user_fname','$user_lname','$contact_no','$email','$username','$pass','$cpass','$token','inactive')";

    $iquery = mysqli_query($con, $insertquery);
    if ($iquery) {

        $subject = "Email Activation";
        $body = "Hi, $username. Click here to activate your account 
            http://localhost/law/activate.php?token=$token";
        $sender_email = "From: hussainsp15@gmail.com";

        if (mail($email, $subject, $body, $sender_email)) {
            $_SESSION['msg'] = "check your mail to activate your account $email";
            header('location: ../user-login');
        } else {
            echo '<div class="alert alert-danger">Email sending failed.</div>';
        }
    } else {
?>
        <script>
            alert("Records Not Inserted");
        </script>
<?php
    }
}
// else {
//     echo '<div class="alert alert-danger">Passwords do not match</div>';
// }
// }
// }
?>
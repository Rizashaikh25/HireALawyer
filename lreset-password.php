<?php
session_start();
?>
<?php
include 'includes/conn.php';
if (isset($_POST['submit'])) {


  if (isset($_GET['ltoken'])) {

    $ltoken = $_GET['ltoken'];

    $newpassword = mysqli_real_escape_string($con, $_POST['lawyer_password']);
    $lawyer_cpassword = mysqli_real_escape_string($con, $_POST['lawyer_cpassword']);

    $pass = password_hash($newpassword, PASSWORD_BCRYPT);
    $cpass = password_hash($lawyer_cpassword, PASSWORD_BCRYPT);



    if ($newpassword === $lawyer_cpassword) {

      $updatequery = " update lawyer set lawyer_password='$pass' where ltoken='$ltoken' ";

      $iquery = mysqli_query($con, $updatequery);
      if ($iquery) {
        $_SESSION['lmsg'] = "Your password has been updated successfully";
        header('location: login-lawyer');
      } else {
        $_SESSION['lmsg'] = "Your password is not updated";
        header('location: lreset-password');
      }
    } else {
      $_SESSION['lmsg'] = "Password's do not match";
    }
  } else {
    echo "No token found";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Password Reset</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-md-6">
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="user-login-form text-center">
              <h2>Enter your new password</h2>
              <p class="bg-info text-black">
                <?php

                if (isset($_SESSION['lmsg'])) {
                  echo $_SESSION['lmsg'];
                } else {
                  echo $_SESSION['lmsg'] = "";
                }
                ?>
              </p>

              <hr>
              <form action="" method="post">

                <div class="form-group">
                  <input type="password" name="lawyer_password" class="form-control" placeholder="Your new password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                </div>
                <div class="form-group">
                  <input type="password" name="lawyer_cpassword" class="form-control" placeholder="Confirm password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                </div>

                <div>
                  <input type="submit" name="submit" value="Update Password" class="btn btn-dark mb-3"><br>
                  <a href="user-login"> Log in</a><br>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
<?php
session_start();
include 'includes/conn.php';
if (isset($_POST['submit'])) {


  if (isset($_GET['token'])) {

    $token = $_GET['token'];

    $newpassword = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($newpassword, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);



    if ($newpassword === $cpassword) {

      $updatequery = " update users set password='$pass' where token='$token' ";

      $iquery = mysqli_query($con, $updatequery);
      if ($iquery) {
        $_SESSION['msg'] = "Your password has been updated successfully";
        header('location: user-login');
      } else {
        $_SESSION['passmsg'] = "Your password is not updated";
        header('location: reset-password');
      }
    } else {
      $_SESSION['passmsg'] = "Password's do not match";
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

                if (isset($_SESSION['passmsg'])) {
                  echo $_SESSION['passmsg'];
                } else {
                  echo $_SESSION['passmsg'] = "";
                }
                ?>
              </p>

              <hr>
              <form action="" method="post">

                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Your new password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                </div>
                <div class="form-group">
                  <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                </div>

                <div class="text-center">
                  <input type="submit" name="submit" value="Update Password" class="btn btn-dark mb-3"><br>
                  <a href="user-login" style="color:black">Login</a><br>


                </div>
              </form>
            </div>
          </div>

        </div>
      </div>



      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
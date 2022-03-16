<?php
include_once 'includes/header.php';
if (isset($_SESSION["username"])) {
    header("Location:index");
}
?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>User Registration</h2>
            </div>
            <div class="col-12">
                <a href="index">Home</a>
                <a href="">Register</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="container-fluid">
                <h2 class="mb-5">Consider few basic password rules : </h2>
                <div class="container-fluid">
                    <i class="fa fa-check fa-2x m-2" aria-hidden="true"></i><label style="font-size:20px">Change your passwords periodically</label><br>
                    <i class="fa fa-check fa-2x m-2" aria-hidden="true"></i><label style="font-size:20px">Avoid re-using password for multiple site</label><br>
                    <i class="fa fa-check fa-2x m-2" aria-hidden="true"></i>
                    <label style="font-size:20px">Use complex characters and number</label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="user-login-form">
                        <h2>Register</h2>
                        <?php

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
                                            
                            $emailquery = "select * from users where email ='$email' ";
                            $query = mysqli_query($con, $emailquery);

                            $emailcount = mysqli_num_rows($query);
                            
                            if ($emailcount > 0) {
                            
                                echo '<div class="alert alert-danger">Email Address Already Exists.</div>';
                            
                            }else{
                                if($res['success'] == false) {

                                    echo '<div class="alert alert-warning">
                                              <strong>Error!</strong> You are not a human.
                                          </div>';        
                            }else{
                                
                                if ($password === $cpassword) {

                                    $insertquery = "insert into users(user_fname, user_lname, contact_no, email, username, password, cpassword,token, status) values('$user_fname','$user_lname','$contact_no','$email','$username','$pass','$cpass','$token','inactive')";

                                    $iquery = mysqli_query($con, $insertquery);
                                    if ($iquery) {

                                        $subject = "Email Activation";
                                        $body = "Hi, $username. Click here to activate your account http://localhost/law/activate.php?token=$token";
                                        $sender_email = "From: rizashaikh25@gmail.com";

                                        if (mail($email, $subject, $body, $sender_email)) {
                                            $_SESSION['msg'] = "check your mail to activate your account $email";
                                            header('location: user-login');
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
                                } else {
                                    echo '<div class="alert alert-danger">Passwords do not match</div>';
                                }
                            }
                        }
                        }
                        ?>
                        <hr>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <b><label>First Name:</label></b>
                            <div class="form-group">
                                <input type="text" name="user_fname" class="form-control" placeholder="First Name" required="required" />
                            </div>
                            <b><label>Last Name:</label></b>
                            <div class="form-group">
                                <input type="text" name="user_lname" class="form-control" placeholder="Last Name" required="required" />
                            </div>
                            <b><label>Contact Number:</label></b>
                            <div class="form-group">
                                <input type="text" name="contact_no" class="form-control" placeholder="Contact Number" required="required" />
                            </div>
                            <b><label>Email Address:</label></b>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control checking_email" placeholder="Your Email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                                <small class="error_email" style="color:red;"> </small>
                            </div>
                            <b><label>Username:</label></b>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" required="required" />
                            </div>
                            <b><label>Password:</label></b>
                            <div class="form-group">
                                <input type="password" name="password" id="pwd" class="form-control" placeholder="Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                            </div>
                            <div id="showErrorPwd"></div>
                            <b><label>Confirm Password:</label></b>
                            <div class="form-group">
                                <input type="password" name="cpassword" id="cpwd" class="form-control" placeholder="Confirm Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                             </div>
                                <input type="submit" name="submit" value="Register" class="btn btn-dark mb-3"><br>                            
                                <p>Already have an account <a href="user-login"> Log in</a><br></p>
                            </div>
                            <input type="hidden" id="token" name="token">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include_once 'includes/footer.php'; ?>
<script src="https://www.google.com/recaptcha/api.js?render=6LdRZ3IdAAAAAGWMp79S8XNfr5W0czQip99oCgMW"></script>
<script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LdRZ3IdAAAAAGWMp79S8XNfr5W0czQip99oCgMW', {action: 'homepage'}).then(function(token) {
         console.log(token);
         document.getElementById("token").value = token;
      });
  });
  </script>

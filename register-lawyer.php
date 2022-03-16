<?php include_once 'includes/header.php';
if (isset($_SESSION["lawyer_name"])) {
    header("Location: index");
}
?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>User Login /Registration</h2>
            </div>
            <div class="col-12">
                <a href="index">Home</a>
                <a href="">User</a>
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
                    <h2>Registration </h2>

                    <?php
                    if (isset($_POST['signup'])) {

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

                        $lawyer_name = mysqli_real_escape_string($con, $_POST['lawyer_name']);
                        $lawyer_number = mysqli_real_escape_string($con, $_POST['lawyer_number']);
                        $lawyer_email = mysqli_real_escape_string($con, $_POST['lawyer_email']);
                        $lawyer_password = mysqli_real_escape_string($con, $_POST['lawyer_password']);
                        $lawyer_cpassword = mysqli_real_escape_string($con, $_POST['lawyer_cpassword']);

                        $pass = password_hash($lawyer_password, PASSWORD_BCRYPT);
                        $cpass = password_hash($lawyer_cpassword, PASSWORD_BCRYPT);

                        $ltoken = bin2hex(random_bytes(15));

                        $emailquery = "select * from lawyer where lawyer_email ='$lawyer_email' ";
                        $query = mysqli_query($con, $emailquery);

                        $emailcount = mysqli_num_rows($query);

                        if ($emailcount > 0) {
                            echo '<div class="alert alert-danger">Email Address Already Exists.</div>';
                        }else{
                            if($res['success'] == false) {

                                echo '<div class="alert alert-warning">
                                          <strong>Error!</strong> You are not a human.
                                      </div>';
                                
                        } else {
                            if ($lawyer_password === $lawyer_cpassword) {

                                $insertquery = "insert into lawyer(lawyer_name, lawyer_number, lawyer_email, lawyer_password, lawyer_cpassword, Status, ltoken, acc_status) values('$lawyer_name','$lawyer_number','$lawyer_email','$pass','$cpass','Pending','$ltoken','inactive')";

                                $iquery = mysqli_query($con, $insertquery);
                                if ($iquery) {

                                    $subject = "Email Activation";
                                    $body = "Hi, $lawyer_name. Click here to activate your account 
            http://localhost/law/lactivate.php?ltoken=$ltoken";
                                    $sender_email = "From: rizashaikh25@gmail.com";

                                    if (mail($lawyer_email, $subject, $body, $sender_email)) {
                                        $_SESSION['lmsg'] = "check your mail to activate your account $lawyer_email";
                                        header('location: login-lawyer');
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

                    <div class="lawyer-registration-form">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <b><label>Name:</label></b>
                                    <div class="form-group form-control-sm">
                                        <input type="text" name="lawyer_name" class="form-control" placeholder="Your Name" required="required" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b><label>Contact:</label></b>
                                    <div class="form-group form-control-sm">
                                        <input type="text" name="lawyer_number" class="form-control" placeholder="Your Number" required="required" pattern="[1-9]{1}[0-9]{9}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b><label>Email:</label></b>
                                    <div class="form-group form-control-sm">
                                        <input type="email" name="lawyer_email" class="form-control" placeholder="Your Email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b><label>Password:</label></b>
                                    <div class="form-group">
                                        <input type="password" name="lawyer_password" class="form-control" placeholder="Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <b><label>Confirm Password:</label></b>
                                    <div class="form-group">
                                        <input type="password" name="lawyer_cpassword" class="form-control" placeholder="Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="submit" name="signup" value="Sign up" class="btn btn-dark mb-3"><br>
                                Already Registered? <a href="login-lawyer">Login</a>
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
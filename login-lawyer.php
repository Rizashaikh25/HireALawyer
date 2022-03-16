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
                <h2>Lawyer Login</h2>
            </div>
            <div class="col-12">
                <a href="index">Home</a>
                <a href="">Login</a>
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

                    <div class="lawyer-Login-form">

                        <?php
                        if (isset($_SESSION['lmsg']))
                            echo $_SESSION['lmsg'];
                        unset($_SESSION['lmsg']);
                        ?>

                        <?php
                        if (isset($_POST['login'])) {

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
                            
                            $lawyer_email = $_POST['lawyer_email'];
                            $lawyer_password = $_POST['lawyer_password'];
                            $email_search = "select * from lawyer where lawyer_email='$lawyer_email' and acc_status='active' ";
                            $query = mysqli_query($con, $email_search);

                            $email_count = mysqli_num_rows($query);
                            if($res['success'] == false) {

                                echo '<div class="alert alert-warning">
                                          <strong>Error!</strong> You are not a human.
                                      </div>';
                            
                            }elseif ($email_count) {
                                $email_pass = mysqli_fetch_assoc($query);

                                $db_pass = $email_pass['lawyer_password'];

                                $_SESSION['lawyer_name'] = $email_pass['lawyer_name'];
                                $_SESSION['lawyer_email'] = $email_pass['lawyer_email'];
                                $_SESSION['ltoken'] = $email_pass['ltoken'];
                                $_SESSION['lawyer_number'] = $email_pass['lawyer_number'];
                                $_SESSION['LawyerAddress'] = $email_pass['LawyerAddress'];
                                $_SESSION['LawyerCity'] = $email_pass['LawyerCity'];
                                $_SESSION['LawyerState'] = $email_pass['LawyerState'];
                                $_SESSION['LawyerZip'] = $email_pass['LawyerZip'];
                                $_SESSION['LawyerLicenseNumber'] = $email_pass['LawyerLicenseNumber'];
                                $_SESSION['BarCouncilDate'] = $email_pass['BarCouncilDate'];
                                $_SESSION['LawyerAboutMe'] = $email_pass['LawyerAboutMe'];
                                $_SESSION['LawyerAwards'] = $email_pass['LawyerAwards'];
                                $_SESSION['id'] = $email_pass['id'];

                                $pass_decode = password_verify($lawyer_password, $db_pass);

                                if ($pass_decode) {
                                    header('location: lawyer/Personal-details');
                                } else {
                                    echo '<div class="alert alert-danger">Password is incorrect.</div>';
                                }
                            } else {
                                echo '<div class="alert alert-danger">Invalid Email.</div>';
                            }
                        }

                        ?>

                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            <b><label>Email:</label></b>
                            <div class="form-group">
                                <input type="email" name="lawyer_email" class="form-control" placeholder="Your Email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                            </div>
                            <b><label>Password:</label></b>
                            <div class="form-group">
                                <input type="password" name="lawyer_password" class="form-control" placeholder="Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                            </div>
                            <div>
                                <input type="submit" name="login" value="Login" class="btn btn-dark"><br>
                                <a href="lrecover-email">Forgot Password?</a><br>
                                Don't have an account? <a href="register-lawyer">Sign up</a>

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
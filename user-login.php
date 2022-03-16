<?php include_once 'includes/header.php';
if (isset($_SESSION["username"])) {
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
                    <div class="user-login-form">
                        <h2>Login</h2>
                        <?php
                        if (isset($_SESSION['msg']))
                            echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        ?>
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

                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $email_search = "select * from users where email='$email' and status='active' ";
                            $query = mysqli_query($con, $email_search);

                            $email_count = mysqli_num_rows($query);
                            
                            if($res['success'] == false) {

                                echo '<div class="alert alert-warning">
                                          <strong>Error!</strong> You are not a human.
                                      </div>';
                            
                                }elseif ($email_count) {
                                $email_pass = mysqli_fetch_assoc($query);

                                $db_pass = $email_pass['password'];

                                $_SESSION['user_fname'] = $email_pass['user_fname'];
                                $_SESSION['username'] = $email_pass['username'];
                                $_SESSION['email'] = $email_pass['email'];
                                $_SESSION['token'] = $email_pass['token'];
                                $_SESSION['user_id'] = $email_pass['user_id'];
                                // $_SESSION['msg'] = $email_pass['msg'];

                                $pass_decode = password_verify($password, $db_pass);

                                if ($pass_decode) {
                                    header('location: index');
                                } else {
                                    echo '<div class="alert alert-danger">Password is incorrect.</div>';
                                }
                            } else {
                                echo '<div class="alert alert-danger">Invalid Email.</div>';
                            }
                        }

                        ?>
                        <hr>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                            
                            <b><label>Email:</label></b>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                            </div>

                            <b><label>Password:</label></b>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" />
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Login" class="btn btn-dark mb-3"><br>
                                <a href="recover-email">Forgot Password?</a><br>
                                <p> Dont't have an account <a href="user-register">Sign Up</a><br></p>

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
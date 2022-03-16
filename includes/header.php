<?php
session_start();
include 'meta-data.php';
include 'conn.php';
ob_start();
?>

<body>

    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="index">
                            <h1>Hire A Lawyer!</h1>
                            <!-- <img src="img/logo.jpeg" alt="Hire A Lawyer!">  -->
                        </a>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="top-bar-right">
                        <?php
                        $query = mysqli_query($con, "select * from basic_details where id=1");
                        while ($row = mysqli_fetch_array($query)) {

                        ?>
                            <div class="text">
                                <h2>+91 <?php echo ($row['Numbers1']) ?></h2>
                                <p>Call Us For Free Consultation</p>

                            </div>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
<?php } ?>
<!-- Top Bar End -->

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto" style="margin-left: -2%;">
                    <a href="index" class="nav-item nav-link active">Home</a>
                    <a href="lawyers" class="nav-item nav-link">Attorney</a>
                    <div class="nav-item dropdown">
                        <a href="services" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <a href="services" class="dropdown-item">Service Areas</a>
                            <a href="all-services" class="dropdown-item">All Service</a>
                            <a href="service-reuest" class="dropdown-item">Service Request </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown ">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                        <div class="dropdown-menu">
                            <a href="about-us" class="dropdown-item">About Us</a>
                            <a href="contact-us" class="dropdown-item">Contact Us</a>
                            <a href="Faqs" class="dropdown-item">FAQ</a>
                        </div>
                    </div>

                </div>
                <div class="nav-item dropdown navbar-nav">
                    <?php
                    if (isset($_SESSION["username"])) {

                    ?>
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION["username"]; ?> </a>
                        <div class="dropdown-menu"> <a href="user/Personal-Details" class="dropdown-item">My Profile</a>
                        <a href="user-logout" class="dropdown-item">Log Out</a>
                        
                        <!-- <div class="dropdown-menu"> <a href="user-logout" class="dropdown-item">Log Out</a> -->
                        
                        </div> <?php } else {


                                ?>
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">User </a>

                        <div class="dropdown-menu">
                            <a href="user-register" class="dropdown-item">Sign Up</a>
                            <a href="user-login" class="dropdown-item">Sign In</a>

                        </div>
                    <?php } ?>

                </div>

                <!-- Lawyer Login -->
                <div class="nav-item dropdown navbar-nav">
                    <?php
                    if (isset($_SESSION["lawyer_name"])) {

                    ?>
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION["lawyer_name"]; ?> </a>
                        <div class="dropdown-menu"> <a href="Lawyer/Personal-details" class="dropdown-item">Dashboard</a>
                            <a href="logout-lawyer" class="dropdown-item">Log Out</a>
                        </div> <?php } else {


                                ?>

                        <a href="register-lawyer" class="nav-link">Join as a Professional </a>

                    <?php } ?>
                </div>


            </div>


            <div class="ml-auto" style="margin-right: -5%;">
                <!-- <a class="btn" href="register-lawyer">Talk to a Lawyer</a> -->
                <a class="btn" href="#" onclick="alert('Live Chat feature Coming soon!');">Coming Soon</a>
                <!-- <a class="btn" href="user/">Coming Soon</a> -->
            </div>
    </div>

    </nav>
</div>
</div>

<script src="js/sweetalert.min.js"></script>
<!-- <script src="assets/plugins/sweetalert/sweetalert.min.js"></script> -->
<?php
if (isset($_SESSION['stat']) && $_SESSION['stat'] != '') {
?>
    <script>
        swal({
            title: "<?php echo $_SESSION['stat']; ?>",
            icon: "<?php echo $_SESSION['status_code']; ?>",
            button: "Ok",
        });
    </script>
<?php
    unset($_SESSION['stat']);
}
?>
<!-- Nav Bar End -->
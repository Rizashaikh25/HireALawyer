<!-- Newsletter Start -->
<div class="newsletter">
    <div class="container">
        <div class="section-header">
            <h2>Subscribe Our Newsletter</h2>
        </div>
        <form action="actions/subscribe.php" method="post">
            <div class="form">
                <input type="email" name="email" class="form-control checking_email" placeholder="Email here">
                <small class="error_email" style="color:red;"> </small>
                <input type="submit" name="submit" value="submit" class="btn">

            </div>
        </form>
    </div>
</div>
<!-- Newsletter End -->
<?php
$query = mysqli_query($con, "select * from basic_details where id=1");
while ($row = mysqli_fetch_array($query)) {

?>
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-about">
                        <h2>About Us</h2>
                        <p>
                            <?php echo ($row['About_Us']) ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Civil Law</a>
                                <a href="">Family Law</a>
                                <a href="">Business Law</a>
                                <a href="">Education Law</a>
                                <a href="">Immigration Law</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="About-us.php">About Us</a>
                                <a href="contact-us.php">Contact Us</a>
                                <a href="Faqs.php">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i> <?php echo ($row['address']) ?></p>
                                <p><i class="fa fa-phone-alt"></i> +91 <?php echo ($row['Numbers1']) ?></p>
                                <p><i class="fa fa-envelope"></i><?php echo ($row['email']) ?></p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-menu">
            <div class="f-menu">
                <a href="">Terms of use</a>
                <a href="">Privacy policy</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="Faqs.php">FQAs</a>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="#">2021, All Right Reserved.</p></a>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="#">fron Riza </a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- <a  class="whats-app" href='https://wa.me/+917066668800?text=Thank you for your message! *Welcome to HIRE A LAWYER* We will get back to you within 3 hours. In the meantime, you can check out our help center. We have put a lot of effort into it, so the answer to your question may already be in there!' target="_blank"> 

            To create more static whatsapp link -->

    <a class="whats-app" href='https://wa.link/03wbtk'>
        <i class="fab fa-whatsapp my-float"></i>
        <!-- https://create.wa.link/ {Reference to creat whatsapp link} -->

    </a>
    </div>
<?php } ?>

<!-- JavaScript Libraries -->
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_SESSION['stat']) && $_SESSION['stat'] != '') {
?>
    <script>
        swal({
            title: "<?php echo $_SESSION['stat']; ?>",            
            icon: "success",
            button: "Ok",
        });
    </script>
<?php
    unset($_SESSION['stat']);
}
?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<!-- New Footer code -->
<script src=”jquery.min.js”></script>
<script type="text/javascript">
    $(document).ready(function() {
        //to disable the entire page
        $("body").on("contextmenu", function(e) {
            return false;
        });

        //to disable a section
        $("#id").on("contextmenu", function(e) {
            return false;
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        //to disable the entire page 
        $('body').bind('cut copy paste', function(e) {
            e.preventDefault();
        });

        //to disable a section
        $('#id').bind('cut copy paste', function(e) {
            e.preventDefault();
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        //to disable cut, copy and paste
        $('body').bind('cut copy paste', function(e) {
            e.preventDefault();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.checking_email').keyup(function(e) {
            var email = $('.checking_email').val();
            // alert(email);
            $.ajax({
                type: "POST",
                url: "../actions/subscribe.php",
                data: {
                    "check_submit_btn": 1,
                    "email_id": email,
                },
                success: function(response) {
                    // alert(response);
                    $('.error_email').text(response);
                }
            });
        });
    });
</script>
</body>

</html>
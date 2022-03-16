<?php include_once 'includes/header.php'; ?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact Us</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Contact Us</a>
            </div>
        </div>
    </div>
</div>
<?php
$query = mysqli_query($con, "select * from basic_details where id=1");
while ($row = mysqli_fetch_array($query)) {

?>
    <!-- Page Header End -->
    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contact Us</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                                <p><?php echo ($row['address']) ?></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fa fa-phone-alt"></i>
                            <div class="contact-text">
                                <h2>Phone</h2>
                                <p>+91 <?php echo ($row['Numbers1']) ?></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fa fa-envelope"></i>
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p><?php echo ($row['email']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-6">
                <div class="contact-form">
                    <form action="actions/contact.php" method="post">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control checking_email" placeholder="Your Email" required="required" />
                            <small class="error_email" style="color:red;"> </small>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required="required" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                        </div>
                        <div>
                            <input type="submit" name="submit" value="Send Message" class="btn">
                        </div>
                        <input type="hidden" id="token" name="token">
                    </form>
                </div>
            </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60539.19735397382!2d73.90439927448233!3d18.497250780066505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2e9ff81f1aae9%3A0x2560343555ac8b53!2sHadapsar%2C%20Pune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1615653763171!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Contact End -->
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

    <!-- <script>
        $(document).ready(function() {
            $('.checking_email').keyup(function(e) {
                var email = $('.checking_email').val();
                // alert(email);
                $.ajax({
                    type: "POST",
                    url: "actions/contact.php",
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
    </script> -->
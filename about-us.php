<?php include_once 'includes/header.php'; ?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="col-lg-12 col-md-12">
    <div class="section-header">
        <h2>We take pride! Not in our work, but in your words.</h2>

    </div>
    <?php
    $query = mysqli_query($con, "select * from basic_details where id=1");
    while ($row = mysqli_fetch_array($query)) {
    ?>

        <!-- Feature Start -->
        <div class="feature">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row align-items-center feature-item">

                            <div class="col-12">
                                <h3>About Us</h3>
                                <p id="para">
                                    <?php echo ($row['About_Us']) ?>
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center feature-item">
                            <div class="col-12">
                                <h3>Mission</h3>
                                <p>
                                    <?php echo ($row['Mission']) ?>
                                </p>
                            </div>



                        <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<!-- Feature End -->

<div class="team">
    <div class="container">
        <div class="section-header">
            <h2>Meet Our Team</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <!-- <img src="img/team-1.jpg" alt="Team Image"> Insert img here -->
                    </div>
                    <div class="team-text">
                        <h2>Ms. Riza Shaikh <br> </h2>
                        <!-- <p></p> -->

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <!-- <img src="img/team-2.jpg" alt="Team Image">   insert img here -->
                    </div>


                    <div class="team-text">
                        <h2>Ms. Fatima Shakeel </h2>
                        <!-- <p></p> -->

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <!-- <img src="img/team-3.jpg" alt="Team Image">   insert img here -->
                    </div>
                    <div class="team-text">
                        <h2>Mr. Hussain Patrawala</h2>
                        <!-- <p></p> -->

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <!-- <img src="img/team-4.jpg" alt="Team Image">   Insert img here -->
                    </div>
                    <div class="team-text">
                        <h2>Mr. Pankaj Kulkarni</h2>
                        <!-- <p></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>
<?php include_once'includes/header.php'; 
$id = $_GET['id'];

if ($_GET["id"]) 
{
    $query=mysqli_query($con,"select * from practice_area where id ='$id'");

while($row=mysqli_fetch_array($query))
{
?>
<!-- Page Header Start -->

            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2><?php echo ($row['service_area'])?> Law</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href=""><?php echo ($row['service_area'])?> Law</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
             <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2><?php echo ($row['service_area'])?> Law</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    <?php echo ($row['service_area_description'])?> 
                                </p>
                                <a class="btn" href="all-services.php">All Services</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <!-- <img src="img/feature.jpg" alt="Image"> -->
                                <img src="TypesOfLaw/<?php echo ($row['service_area'])?>.jpg" alt="<?php echo ($row['service_area'])?> LAW" >
                            </div>
                        </div>
                    </div>

                </div>
            </div>
           <?php }  } ?>
            <!-- About End -->
<?php include_once'includes/footer.php'; ?>



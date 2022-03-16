<?php include_once'includes/header.php'; ?>
<!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Service Areas</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Service Areas</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
<!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>Our Practices Areas</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
<?php   
$query=mysqli_query($con,"select * from practice_area where service_area ='Civil'");

while($row=mysqli_fetch_array($query))
{

?> 
                            <!-- <a href="individual-service-area?id=<?php echo $row['id'];?>"> -->
                            <div class="service-item">
                                <div class="service-icon">
                                    
                                    <i class="fas fa-city"></i>
                                </div>
                        
                               <h3><?php echo ($row['service_area'])?></h3>
                                <p>
                                    
                                    <?php echo substr($row['service_area_description'], 0, 100) .((strlen($row['service_area_description']) > 100) ? '...' : ''); ?> 

                                </p>
                                <a class="btn" href="individual-service-area?id=<?php echo $row['id'];?>">Learn More</a>
                            </div>
                        </div>
<?php  };?>

                        <div class="col-lg-4 col-md-6">
<?php   
$query=mysqli_query($con,"select * from practice_area where service_area ='Family'");

while($row=mysqli_fetch_array($query))
{

?> 
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                               <h3><?php echo ($row['service_area'])?></h3>
                                <p>
                                    
                                    <?php echo substr($row['service_area_description'], 0, 100) .((strlen($row['service_area_description']) > 100) ? '...' : ''); ?> 

                                </p>
                               <a class="btn" href="individual-service-area?id=<?php echo $row['id'];?>">Learn More</a>
                            </div>
<?php  };?>
                        </div>

     <div class="col-lg-4 col-md-6">
<?php   
$query=mysqli_query($con,"select * from practice_area where service_area ='Buisness'");

while($row=mysqli_fetch_array($query))
{

?> 
                            <div class="service-item">
                                <div class="service-icon">
                                     <i class="fa fa-hand-holding-usd"></i>
                                </div>
                               <h3><?php echo ($row['service_area'])?></h3>
                                <p>
                                    
                                    <?php echo substr($row['service_area_description'], 0, 100) .((strlen($row['service_area_description']) > 100) ? '...' : ''); ?> 

                                </p>
                               <a class="btn" href="individual-service-area?id=<?php echo $row['id'];?>">Learn More</a>
                            </div>
<?php  };?>
                        </div>
                        <div class="col-lg-4 col-md-6">
<?php   
$query=mysqli_query($con,"select * from practice_area where service_area ='Education'");

while($row=mysqli_fetch_array($query))
{

?> 
                            <div class="service-item">
                                <div class="service-icon">
                                     <i class="fa fa-graduation-cap"></i>
                                </div>
                               <h3><?php echo ($row['service_area'])?></h3>
                                <p>
                                    
                                    <?php echo substr($row['service_area_description'], 0, 100) .((strlen($row['service_area_description']) > 100) ? '...' : ''); ?> 

                                </p>
                               <a class="btn" href="individual-service-area?id=<?php echo $row['id'];?>">Learn More</a>
                            </div>
<?php  };?>
                        </div>

 <div class="col-lg-4 col-md-6">
<?php   
$query=mysqli_query($con,"select * from practice_area where service_area ='Criminal'");

while($row=mysqli_fetch_array($query))
{

?> 
                            <div class="service-item">
                                <div class="service-icon">
                                     <i class="fa fa-gavel"></i> 
                                </div>
                               <h3><?php echo ($row['service_area'])?></h3>
                                <p>
                                    
                                    <?php echo substr($row['service_area_description'], 0, 100) .((strlen($row['service_area_description']) > 100) ? '...' : ''); ?> 

                                </p>
                               <a class="btn" href="individual-service-area?id=<?php echo $row['id'];?>">Learn More</a>
                            </div>
<?php  };?>
                        </div>
                        <div class="col-lg-4 col-md-6">
<?php   
$query=mysqli_query($con,"select * from practice_area where service_area ='Labour'");

while($row=mysqli_fetch_array($query))
{

?> 
                            <div class="service-item">
                                <div class="service-icon">
                                     <i class="fab fa-creative-commons-by"></i>
                                </div>
                               <h3><?php echo ($row['service_area'])?></h3> 
                                <p>
                                    
                                    <?php echo substr($row['service_area_description'], 0, 100) .((strlen($row['service_area_description']) > 100) ? '...' : ''); ?> 

                                </p>
                               <a class="btn" href="individual-service-area?id=<?php echo $row['id'];?>">Learn More</a>
                            </div>
<?php  };?>
                        </div>
<div class="col-lg-4 col-md-6">
<?php   
$query=mysqli_query($con,"select * from practice_area where service_area ='Consumer'");

while($row=mysqli_fetch_array($query))
{

?> 
                            <div class="service-item">
                                <div class="service-icon">
                                     <i class="fa fa-balance-scale-right"></i>
                                </div>
                               <h3><?php echo ($row['service_area'])?></h3> 
                                <p>
                                    
                                    <?php echo substr($row['service_area_description'], 0, 100) .((strlen($row['service_area_description']) > 100) ? '...' : ''); ?> 

                                </p>
                               <a class="btn" href="individual-service-area?id=<?php echo $row['id'];?>">Learn More</a>
                            </div>
<?php  };?>
                        </div>
<div class="col-lg-4 col-md-6">
<?php   
$query=mysqli_query($con,"select * from practice_area where service_area ='Cyber'");

while($row=mysqli_fetch_array($query))
{

?> 
                            <div class="service-item">
                                <div class="service-icon">
                                     <i class="fa fa-globe"></i>
                                </div>
                               <h3><?php echo ($row['service_area'])?></h3> 
                                <p>
                                    
                                    <?php echo substr($row['service_area_description'], 0, 100) .((strlen($row['service_area_description']) > 100) ? '...' : ''); ?> 

                                </p>
                               <a class="btn" href="individual-service-area?id=<?php echo $row['id'];?>">Learn More</a>
                            </div>
<?php  };?>
                        </div>
<div class="col-lg-4 col-md-6">
<?php   
$query=mysqli_query($con,"select * from practice_area where service_area ='Constitutional'");

while($row=mysqli_fetch_array($query))
{

?> 
                            <div class="service-item">
                                <div class="service-icon">
                                     <i class="fa fa-landmark"></i>

                                </div>
                               <h3><?php echo ($row['service_area'])?></h3> 
                                <p>
                                    
                                    <?php echo substr($row['service_area_description'], 0, 100) .((strlen($row['service_area_description']) > 100) ? '...' : ''); ?> 

                                </p>
                               <a class="btn" href="individual-service-area?id=<?php echo $row['id'];?>">Learn More</a>
                            </div>
<?php  };?>
                        </div>

                        
                    </div>
                </div>
            </div>
            <!-- Service End -->
<?php include_once'includes/footer.php'; ?>
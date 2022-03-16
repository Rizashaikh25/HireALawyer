<?php include 'header.php'; ?>
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left"></h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="container-fluid ">
                <h3> </h3>
                <!--                                     <h3>Update Admin Credentials</h3>
 -->
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card-box noradius noborder bg-info Center">
                        <?php $query = mysqli_query($con, "select * from lawyer");
                        $countcat = mysqli_num_rows($query);
                        ?>
                        <h6 class="text-white text-uppercase m-b-20">Total Lawyers Registered</h6>
                        <h1 class="m-b-20 text-white counter"><?php echo htmlentities($countcat); ?></h1>

                    </div>
                </div>

                <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card-box noradius noborder bg-info Center">
                        <?php $query = mysqli_query($con, "select * from lawyer where status='Pending'");
                        $countcat = mysqli_num_rows($query);
                        ?>
                        <h6 class="text-white text-uppercase m-b-20">Pending Lawyers</h6>
                        <h1 class="m-b-20 text-white counter"><?php echo htmlentities($countcat); ?></h1>

                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card-box noradius noborder bg-info Center">
                        <?php $query = mysqli_query($con, "select * from lawyer where status='Approved'");
                        $countcat = mysqli_num_rows($query);
                        ?>
                        <h6 class="text-white text-uppercase m-b-20">Approved Lawyers</h6>
                        <h1 class="m-b-20 text-white counter"><?php echo htmlentities($countcat); ?></h1>

                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card-box noradius noborder bg-purple">
                        <!-- <?php $query = mysqli_query($con, "select * from users ");
                                $countcat = mysqli_num_rows($query);
                                ?>   -->
                        <h6 class="text-white text-uppercase m-b-20">Users Registered</h6>
                        <h1 class="m-b-20 text-white counter"> <?php echo htmlentities($countcat); ?></h1>

                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card-box noradius noborder bg-danger Center">

                        <?php $query = mysqli_query($con, "select * from service_req ");
                        $countcat = mysqli_num_rows($query);
                        ?>
                        <h6 class="text-white text-uppercase m-b-20">Service Reuest</h6>
                        <h1 class="m-b-20 text-white counter"><?php echo htmlentities($countcat); ?></h1>

                    </div>
                </div>




            </div>
            <div class="row">


                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card-box noradius noborder bg-secondary">
                        <?php $query = mysqli_query($con, "select * from subscribe ");
                        $countcat = mysqli_num_rows($query);
                        ?>
                        <h6 class="text-white text-uppercase m-b-20">Subscribers</h6>
                        <h1 class="m-b-20 text-white counter"><?php echo htmlentities($countcat); ?></h1>

                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card-box noradius noborder bg-warning">
                        <?php $query = mysqli_query($con, "select * from contact_us ");
                        $countcat = mysqli_num_rows($query);
                        ?>
                        <h6 class="text-white text-uppercase m-b-20">Contact Form </h6>
                        <h1 class="m-b-20 text-white counter"><?php echo htmlentities($countcat); ?></h1>

                    </div>
                </div>


            </div>
            <!-- end row -->
            <div class="card-body">
                <?php include 'footer.php'; ?>
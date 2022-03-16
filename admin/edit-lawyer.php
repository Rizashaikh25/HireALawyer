<?php include 'header.php';
$id = $_GET['id']; ?>
<div class="content-page">
    <?php
    $query = mysqli_query($con, "select * from lawyer where id = '$id'");
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left"></h1>
                            <ol class="breadcrumb float-right mt-3">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Status</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="container-fluid ">
                            <h3>Edit Lawyer status </h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form autocomplete="off" action="actions/status" method="post" enctype="multipart/form-data">
                            <div class="row container-fluid">
                                <div class="col-md-8"> <input type="hidden" name="id" value="<?php echo ($row['id']) ?>">
                                    <select class="form-control" name="Status">
                                        <option class="text-danger" value="<?php echo ($row['status']) ?>"><?php echo ($row['status']) ?></option>
                                        <option value="Pending">Pending</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Featured">Featured</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="submit" name="submit" class="btn btn-danger" value="Update">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Start card-body-->
                <!-- end row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="card-body">
                            <form autocomplete="off" action="actions/update-details.php" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="Name">Name(As per Documents)</label>
                                        <input type="text" class="form-control" id="lawyerName" placeholder="Enter Full Name" autocomplete="off" name="lawyer_name" value="<?php echo ($row['lawyer_name']) ?>" pattern="[A-Za-z+" required="required" id="disabledInput">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="LawyerNumber">Number (10 Digits only)</label>
                                        <input type="text" class="form-control" id="LawyerNumber" name="lawyer_number" placeholder="Contact Number" autocomplete="off" required="required" value="<?php echo ($row['lawyer_number']) ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="LawyerGender">Gender</label>
                                        <select id="LawyerGender" class="form-control" name="LawyerGender" readonly>
                                            <option value="<?php echo ($row['LawyerGender']) ?>"><?php echo ($row['LawyerGender']) ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="LawyerAddress">Address</label>
                                    <input type="text" class="form-control" id="LawyerAddress" placeholder="Apartment, studio, or floor" name="LawyerAddress" value="<?php echo ($row['LawyerAddress']) ?>" readonly>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="LawyerCity">City</label>
                                        <input type="text" class="form-control" id="LawyerCity" placeholder="Working in City" name="LawyerCity" value="<?php echo ($row['LawyerCity']) ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="LawyerState">State</label>
                                        <input type="text" class="form-control" id="LawyerState" placeholder="Working in State" name="LawyerState" value="<?php echo ($row['LawyerState']) ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="LawyerZip">Zip</label>
                                        <input type="text" class="form-control" id="LawyerZip" placeholder="Zip Code" name="LawyerZip" value="<?php echo ($row['LawyerZip']) ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-7">
                                        <label for="LawyerLicenseNumber">Registered License Number</label>
                                        <input type="text" class="form-control" id="LawyerLicenseNumber" placeholder="Legal License Number" name="LawyerLicenseNumber" value="<?php echo ($row['LawyerLicenseNumber']) ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="BarCouncilDate">
                                            Bar Enrollment Date</label>
                                        <input type="date" class="form-control" id="BarCouncilDate" name="BarCouncilDate" value="<?php echo ($row['BarCouncilDate']) ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="LawyerAboutMe">About Me</label>
                                        <textarea rows="4" cols="50" class="form-control" id="LawyerAboutMe" name="LawyerAboutMe" readonly="readonly"><?php echo ($row['LawyerAboutMe']) ?> </textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="LawyerAwards">Achievements</label>
                                        <textarea readonly rows="4" cols="50" class="form-control" id="LawyerAwards" name="LawyerAwards"><?php echo ($row['LawyerAwards']) ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <input type="file" name="LawyerImage" id="">
                                            </div>
                                        </div>
                                        <!-- end card-->
                                    </div>
                            </form>
                        <?php } ?>
                        </div>
                    </div><!-- end card-->
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
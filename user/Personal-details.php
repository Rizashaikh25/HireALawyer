<?php include_once 'header.php'; ?>
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left"></h1>
                        <ol class="breadcrumb float-right mt-3">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Personal Details</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <?php
            $uid = $_SESSION['user_id'];
            $query = mysqli_query($con, "select * from users where user_id = '$uid'");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <!-- end row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h2>Edit Personal Details</h2>

                            </div>
                            <div class="card-body">

                                <form autocomplete="off" action="actions/update-user-details.php" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="FirstName">First Name</label>
                                            <input type="text" class="form-control" id="User" placeholder="Enter First Name" autocomplete="off" name="user_fname" value="<?php echo ($row['user_fname']) ?>" pattern="[A-Za-z+" required="required">
                                        </div>

                                        <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="LastName">Last Name</label>
                                            <input type="text" class="form-control" id="User" placeholder="Enter Last Name" autocomplete="off" name="user_lname" value="<?php echo ($row['user_lname']) ?>" pattern="[A-Za-z+" required="required">
                                        </div>

                                        <div class="form-group col-md-5">
                                            <label for="contact_no">Contact Number (10 Digits only)</label>
                                            <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact Number" autocomplete="off" required="required" value="<?php echo ($row['contact_no']) ?>">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="UserGender">Gender</label>
                                            <select id="UserGender" class="form-control" name="UserGender">
                                                <option value="<?php echo ($row['UserGender']) ?>"><?php echo ($row['UserGender']) ?></option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="UserAddress">Address</label>
                                        <input type="text" class="form-control" id="UserAddress" placeholder="Apartment, studio, or floor" name="UserAddress" value="<?php echo ($row['UserAddress']) ?>">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="UserCity">City</label>
                                            <input type="text" class="form-control" id="UserCity" placeholder="Working in City" name="UserCity" value="<?php echo ($row['UserCity']) ?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="UserState">State</label>
                                            <input type="text" class="form-control" id="UserState" placeholder="Working in State" name="UserState" value="<?php echo ($row['UserState']) ?>">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="UserZip">Zip</label>
                                            <input type="text" class="form-control" id="UserZip" placeholder="Zip Code" name="UserZip" value="<?php echo ($row['UserZip']) ?>">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo ($row['username']) ?>">
                                        </div>
                                    </div>
                                        </div>
                                        <button type="submit" name="update" class="btn btn-danger">Update </button>
                                </form>
                            <?php } ?>
                            </div>
                        </div><!-- end card-->
                    </div>
                </div>
        </div>

        <?php include_once 'footer.php'; ?>
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
                            <li class="breadcrumb-item active">Admin Credentials</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="container-fluid ">
                <h3>Update Admin Credentials</h3>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-612 col-xl-12">
                <div class="card mb-3">


                    <div class="card-body">
                        <?php
                        $query = mysqli_query($con, "select * from admin where id=1");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <form autocomplete="off" action="actions/update-login-creds.php" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" autocomplete="off" value="<?php echo ($row['name']) ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Contact Number</label>
                                        <input type="text" name="contact" class="form-control" autocomplete="off" value="<?php echo ($row['contact']) ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" id="inputEmail4" autocomplete="off" value="<?php echo ($row['email']) ?>">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Username</label>
                                        <input type="text" name="admin_username" class="form-control" autocomplete="off" value="<?php echo ($row['admin_username']) ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Password</label>
                                        <input type="text" name="password" class="form-control" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Security Question</label>
                                        <input type="text" name="security_question" class="form-control" autocomplete="off" value="<?php echo ($row['security_question']) ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Security Answer</label>
                                        <input type="text" name="security_answer" class="form-control" autocomplete="off" value="<?php echo ($row['security_answer']) ?>">
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                <span style="color: red">
                                    <p id="record"></p>
                                </span>
                            <?php  }; ?>
                            </form>

                    </div>
                </div><!-- end card-->
            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>
    <!-- END content-    -->

    <?php include 'footer.php'; ?>
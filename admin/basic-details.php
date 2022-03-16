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
                            <li class="breadcrumb-item active">Basic Details</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="container-fluid ">
                <h3>Basic Website Details</h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-612 col-xl-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <?php
                        $query = mysqli_query($con, "select * from basic_details");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <form autocomplete="off" action="actions/basic-details.php" method="post">
                                <span style="color: red;">
                                    <marquee direction="right" height="30px">
                                        Changes made are updated on the website, and can not be reversed.
                                    </marquee>
                                </span>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Contact 1</label>
                                        <input type="text" name="Number1" class="form-control" placeholder="Enter Number" value="<?php echo ($row['Numbers1']) ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Contact 2</label>
                                        <input type="text" name="Number2" class="form-control" placeholder="Enter Number " value="<?php echo ($row['number2']) ?>">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo ($row['email']) ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control" rows="5" placeholder="Enter Address"><?php echo ($row['address']) ?>
                                      </textarea>

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>About_Us(Page)</label>
                                        <textarea name="About_Us" class="form-control" rows="5" placeholder="Enter About Us"><?php echo ($row['About_Us']) ?>
                                     </textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Mission</label>
                                        <textarea name="Mission" class="form-control" rows="5" placeholder="Mission"><?php echo ($row['Mission']) ?>
                                     </textarea>
                                    </div>
                                </div>
                                <!-- <input type="hidden" class="delete_id_value" value="<?php echo $row['id']; ?>">
                                <a href="javascript:void(0)" class="delete_btn_ajax"><i class="fas fa-trash icon-del"></i> -->

                                <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                <span style="color: red">
                                    <p id="record"></p>
                                </span>
                            <?php  }; ?>
                    </div>
                    </form>
                </div><!-- end card-->
            </div>
            <!-- END container-fluid -->
        </div>
        <!-- END content -->
    </div>
    <!-- END content-    -->
    <?php include 'footer.php'; ?>
    <!-- <script>
        $(document).ready(function() {
            $('.delete_btn_ajax').click(function(e) {
                e.preventDefault();

                var deleteid = $(this).closest("tr").find('.delete_id_value').val();
                console.log(deleteid);
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this Data",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                type: "POST",
                                url: "actions/delete-contact.php",
                                data: {
                                    "delete_btn_set": 1,
                                    "delete_id": deleteid,
                                },
                                success: function(response) {
                                    swal("Data Deleted successfully", {
                                        icon: "success",
                                    }).then((result) => {
                                        location.reload();
                                    });
                                }
                            });
                        }
                    });
            });
        });
    </script> -->
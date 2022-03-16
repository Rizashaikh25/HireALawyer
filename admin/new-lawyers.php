<?php include 'header.php'; ?>
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
                            <li class="breadcrumb-item active">New Registered Lawyers</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="container-fluid ">
                <h3>New Registered Lawyers</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered table-hover display" style="width:100%" id="myTable">

                        <thead>

                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Profile Completed</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <?php
                        $query = mysqli_query($con, "select * from lawyer where status = 'Pending' ORDER BY id DESC ");
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                            #Profile Completed
                            $row_id = $row['id'];
                            $nul_check = mysqli_query($con, "select $row_id from lawyer");
                            $null_row = mysqli_fetch_array($nul_check);


                            if ("" == $row['lawyer_name'] || "" == $row['LawyerCity'] || "" == $row['lawyer_email'] || "" == $row['lawyer_password'] || "" == $row['lawyer_number'] || "" == $row['LawyerZip'] || "" == $row['BarCouncilDate'] || "" == $row['LawyerLicenseNumber'] || "" == $row['LawyerState'] || "" == $row['practice_courts'] || "" == $row['LawyerAddress']) { //add query here
                                $stat = "No";
                            } else {
                                $stat = "Yes";
                            }
                            #Profile Completed fas fa-trash"
                        ?>
                            <tr>

                                <td><?php echo ($cnt); ?></td>
                                <td><?php echo ($row['lawyer_name']) ?></td>
                                <td><?php echo ($row['lawyer_email']) ?></td>
                                <td><?php echo ($stat); ?></td>
                                <td><span style="color:red;"><?php echo ($row['status']) ?> </span></td>
                                <td>
                                    <input type="hidden" class="delete_id_value" value="<?php echo $row['id']; ?>">
                                    <a href="javascript:void(0)" class="delete_btn_ajax"><i class="fas fa-trash icon-del"></i>
                                        <!-- <a href="actions/delete-lawyer.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?');">
                                        <i class="fas fa-trash icon-del"></i> -->
                                    </a>
                                </td>
                                <span class="btn-label btn-label-right btn-sm">
                                    <td><a role="button" href="edit-lawyer.php?id=<?php echo $row['id']; ?>" class="btn btn-success ">
                                            <i class="fas fa-edit"></i>
                                </span>
                                </a></td>


                            </tr>
                        <?php $cnt++;
                        }; ?>
                    </table>

                </div>
                <!-- end table-responsive-->

            </div>
            <!-- end card-body-->

        </div>
        <!-- end card-->

    </div>

</div>
<!-- end row-->

</div>
<!-- END container-fluid -->

</div>
<!-- END content -->

</div>
<!-- END content-page -->



<?php include 'footer.php'; ?>
<script>
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
                            url: "actions/delete-lawyer.php",
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
</script>
<?php include 'header.php';  ?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Service Request</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h2>Review Service Request</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered table-hover display" style="width:100%" id="myTable">

                                    <thead>

                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Service Name</th>
                                            <th>message</th>
                                            <th>view</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $query = mysqli_query($con, "select * from service_req ORDER BY id DESC");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($query)) {

                                    ?>
                                        <tr>

                                            <td><?php echo ($cnt); ?></td>
                                            <td><?php echo ($row['name']) ?></td>
                                            <td><?php echo ($row['email']) ?></td>
                                            <td><?php echo ($row['service_name']) ?></td>
                                            <td><?php echo ($row['message']) ?></td>
                                            <span class="btn-label btn-label-right btn-sm">
                                                <td> <a role="button" href="edit-lawyer?id=<?php echo $row['id']; ?>" class="btn btn-success " data-toggle="modal" data-target="#exampleModal">
                                                        <i class="fas fa-edit"></i>
                                            </span>
                                            </a></td>

                                            <td>
                                                <input type="hidden" class="delete_id_value" value="<?php echo $row['id']; ?>">
                                                <a href="javascript:void(0)" class="delete_btn_ajax"><i class="fas fa-trash icon-del"></i>
                                                    <!-- <a href="actions/Delete-service-request.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?');">
                                                    <i class="fas fa-trash icon-del"></i>
                                                </a> -->
                                            </td>

                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent molestie suscipit ultricies. Nunc non pulvinar tellus. Nunc varius non ante lobortis venenatis. Aenean enim urna, fermentum eget lectus quis, egestas rutrum dolor. Praesent rutrum eget augue eget maximus. Vivamus vel orci vulputate quam tristique ultrices. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam tincidunt bibendum suscipit. </p>
                                                        <p>Nunc molestie felis vitae sem malesuada pulvinar. In condimentum, eros id pellentesque eleifend, sem nibh eleifend neque, ac ultrices nisl nisl vel felis. Phasellus et pellentesque enim, quis tincidunt dui. Suspendisse nisi libero, mollis efficitur commodo in, tempor ut odio. Donec consequat nunc lorem, sit amet pellentesque erat volutpat et.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
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
<?= include 'footer.php'; ?>
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
                            url: "actions/Delete-service-request.php",
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
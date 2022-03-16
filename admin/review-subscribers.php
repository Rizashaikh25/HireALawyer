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
              <li class="breadcrumb-item active">Subscribers</li>
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
              <h2>Review Subscribers</h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                <table class="table table-bordered table-hover display" style="width:100%" id="myTable">

                  <thead>

                    <tr>
                      <th>Sr. No.</th>
                      <th>Email</th>
                      <th>Created at</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <?php
                  $query = mysqli_query($con, "select * from subscribe ORDER BY id DESC");
                  $cnt = 1;
                  while ($row = mysqli_fetch_array($query)) {
                    # code...
                  ?>
                    <tr>
                      <td><?php echo ($cnt); ?></td>
                      <td><?php echo ($row['email']) ?></td>
                      <td><?php echo ($row['created']) ?></td>

                      <td>
                        <input type="hidden" class="delete_id_value" value="<?php echo $row['id']; ?>">
                        <a href="javascript:void(0)" class="delete_btn_ajax"><i class="fas fa-trash icon-del"></i>
                          <!-- <a href="actions/Delete-subscriber.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?');">
                          <i class="fas fa-trash icon-del"></i> -->
                        </a>
                      </td>
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
              url: "actions/delete-subscriber.php",
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
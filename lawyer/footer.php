<footer class="footer">
    <span class="text-right">
        Copyright <a target="_blank" href="">Hire Alawyer</a>
    </span>

</footer>

<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="assets/js/admin.js"></script>

</div>
<!-- END main -->

<!-- BEGIN Java Script for this page -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>

<!-- SweetAlert start -->
<script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
<?php
if (isset($_SESSION['stat']) && $_SESSION['stat'] != '') {
?>
    <script>
        swal({
            title: "<?php echo $_SESSION['stat']; ?>",
            icon: "success",
            button: "Ok",
        });
    </script>
<?php
    unset($_SESSION['stat']);
}
?>
<!-- Sweetalert End -->
<!-- Counter-Up-->
<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

<!-- dataTabled data -->
<script src="assets/data/data_datatables.js"></script>

<!-- Charts data -->
<script src="assets/data/data_charts_dashboard.js"></script>
<script>
    $(document).on('ready', function() {
        // data-tables
        $('#dataTable').DataTable({
            data: dataSet,
            columns: [{
                title: "Name"
            }, {
                title: "Position"
            }, {
                title: "Office"
            }, {
                title: "Extn."
            }, {
                title: "Date"
            }, {
                title: "Salary"
            }]
        });

        // counter-up
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });
    });
</script>
<!-- END Java Script for this page -->

</body>

</html>
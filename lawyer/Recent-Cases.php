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
                            <li class="breadcrumb-item active">Recent Cases</li>
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
                            <h3><i class="far fa-file-alt"></i> Recent Cases</h3>
                        </div>
                        <!-- end card-header -->
                        <div class="card-body">
                            <form autocomplete="off" action="#">
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="Practice Area">Practice area</label>
                                        <select id="Practice_Area" class="form-control" required="required">
                                            <option value="">Select Practice Area</option>
                                            <!-- <option selected></option> -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="BarCouncilDate">
                                            Bar Date</label>
                                        <input type="Date" class="form-control" id="BarCouncilDate" required="required">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="LawyerAboutMe">Brief Description</label>
                                        <textarea rows="4" cols="50" class="form-control" id="LawyerAboutMe" placeholder="Eg: High profiled in depth case Description - domestic violence" required="required"></textarea>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="LawyerAwards"> Outcome</label>
                                        <textarea rows="4" cols="50" class="form-control" id="LawyerAwards" placeholder="Eg : Not guilt"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to Update?');">Update </button>
                                <!-- end card-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> Practice Area</th>
                                                    <th>Date</th>
                                                    <th> Brief Description</th>
                                                    <th> Outcome</th>
                                                    <th> Add/Delete </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger btn-sm btn-bl6ck" style="width:60%;"><i class="fas fa-trash"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                <!-- Write sql select all recent cases table-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
            <?php include_once 'footer.php'; ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    function loadData() {
                        $.ajax({
                            url: "actions/load_practice_areas.php",
                            type: "POST",
                            success: function(data) {
                                $("#Practice_Area").append(data);
                            }
                        });
                    }
                    loadData();
                });
            </script>
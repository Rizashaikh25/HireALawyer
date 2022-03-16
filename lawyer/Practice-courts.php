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
                            <li class="breadcrumb-item active">Practice Courts</li>
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
                            <h2>Practising Courts</h2>
                            <p>Select courts in which you are currently practising.
                                <a href="#section30" class="btn btn-primary  float-right" data-target="#customModal" data-toggle="modal" title="Right of advocates to practise">Section 30</a>
                            </p>

                            <?php
                            if (isset($_SESSION['status'])) {
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong></strong> <?php echo $_SESSION['status']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php
                                unset($_SESSION['status']);
                            }
                            ?>


                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <div class="modal fade section30" id="customModal" tabindex="-1" role="dialog" aria-labelledby="customModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel2">
                                                <spam class="text-danger">Section 30 </spam> Right of advocates to practise.
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Subject to the provisions of this Act, every advocate whose name is entered in the 1[State roll] shall be entitled as of right to practise throughout the territories to which this Act extends,-- <br><br>
                                                <b>
                                                    (i) in all courts including the Supreme Court;<br><br>
                                                    (ii) before any tribunal or person legally authorised to take evidence; and<br><br>
                                                    (iii) before any other authority or person before whom such advocate is by or under any law for the time being in force entitled to practise.
                                            </p>
                                            </b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        $nid = $_SESSION['id'];

                        $query = mysqli_query($con, "select * from lawyer where id = '$nid'");

                        while ($row = mysqli_fetch_array($query)) {
                            $a = $row['practice_courts'];
                            $practice_courts = explode(",", $a);
                        ?>
                            <div class="card-body">

                                <form action="actions/update-practice-courts.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Allahabad High Court" <?php
                                                                                                                                                                if (in_array("Allahabad High Court", $practice_courts)) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                }
                                                                                                                                                                ?>>Allahabad High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Allahabad High Court(Lucknow Branch)" <?php
                                                                                                                                                                                if (in_array("Allahabad High Court(Lucknow Branch)", $practice_courts)) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                }
                                                                                                                                                                                ?>>Allahabad High Court(Lucknow Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Bombay High Court" <?php
                                                                                                                                                            if (in_array("Bombay High Court", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Bombay High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Bombay High Court(Aurangabad Branch)" <?php
                                                                                                                                                                                if (in_array("Bombay High Court(Aurangabad Branch)", $practice_courts)) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                }
                                                                                                                                                                                ?>>Bombay High Court(Aurangabad Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="practice_courts[]" value="High Court"
                                                    <?php
                                                    if (in_array("High Court", $practice_courts)) {
                                                        echo "checked";
                                                    }
                                                    ?>
                                                    >High Court
                                                </label>
                                                </div> 
                                            </div>-->
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Bombay High Court(Nagpur Branch)" <?php
                                                                                                                                                                            if (in_array("Bombay High Court(Nagpur Branch)", $practice_courts)) {
                                                                                                                                                                                echo "checked";
                                                                                                                                                                            }
                                                                                                                                                                            ?>>Bombay High Court(Nagpur Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Bombay High Court(Panaji Branch)" <?php
                                                                                                                                                                            if (in_array("Bombay High Court(Panaji Branch)", $practice_courts)) {
                                                                                                                                                                                echo "checked";
                                                                                                                                                                            }
                                                                                                                                                                            ?>>Bombay High Court(Panaji Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Calcutta High Court" <?php
                                                                                                                                                                if (in_array("Calcutta High Court", $practice_courts)) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                }
                                                                                                                                                                ?>>Calcutta High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="practice_courts[]" value="High Court"
                                                    <?php
                                                    if (in_array("High Court", $practice_courts)) {
                                                        echo "checked";
                                                    }
                                                    ?> 
                                                    >High Court
                                                </label>
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Chhattisgarh High Court" <?php
                                                                                                                                                                    if (in_array("Chhattisgarh High Court", $practice_courts)) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    }
                                                                                                                                                                    ?>>Chhattisgarh High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Delhi High Court" <?php
                                                                                                                                                            if (in_array("Delhi High Court", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Delhi High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Gauhati High Court" <?php
                                                                                                                                                            if (in_array("Gauhati High Court", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Gauhati High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Gauhati High Court(Aizawl Branch)" <?php
                                                                                                                                                                            if (in_array("Gauhati High Court(Aizawl Branch)", $practice_courts)) {
                                                                                                                                                                                echo "checked";
                                                                                                                                                                            }
                                                                                                                                                                            ?>>Gauhati High Court(Aizawl Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Gauhati High Court(Itanagar Branch)" <?php
                                                                                                                                                                                if (in_array("Gauhati High Court(Itanagar Branch)", $practice_courts)) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                }
                                                                                                                                                                                ?>>Gauhati High Court(Itanagar Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Gauhati High Court(Kohima Branch)" <?php
                                                                                                                                                                            if (in_array("Gauhati High Court(Kohima Branch)", $practice_courts)) {
                                                                                                                                                                                echo "checked";
                                                                                                                                                                            }
                                                                                                                                                                            ?>>Gauhati High Court(Kohima Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Gujarat High Court" <?php
                                                                                                                                                            if (in_array("Gauhati High Court(Kohima Branch)", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Gujarat High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Himachal Pradesh High Court" <?php
                                                                                                                                                                        if (in_array("Himachal Pradesh High Court", $practice_courts)) {
                                                                                                                                                                            echo "checked";
                                                                                                                                                                        }
                                                                                                                                                                        ?>>Himachal Pradesh High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Hyderabad High Court" <?php
                                                                                                                                                                if (in_array("Hyderabad High Court", $practice_courts)) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                }
                                                                                                                                                                ?>>Hyderabad High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Jammu and Kashmir High Court" <?php
                                                                                                                                                                        if (in_array("Jammu and Kashmir High Court", $practice_courts)) {
                                                                                                                                                                            echo "checked";
                                                                                                                                                                        }
                                                                                                                                                                        ?>>Jammu and Kashmir High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Jharkhand High Court" <?php
                                                                                                                                                                if (in_array("Jharkhand High Court", $practice_courts)) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                }
                                                                                                                                                                ?>>Jharkhand High Court
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Karnataka High Court" <?php
                                                                                                                                                                if (in_array("Karnataka High Court", $practice_courts)) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                }
                                                                                                                                                                ?>>Karnataka High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Karnataka High Court(Dharwad Branch)" <?php
                                                                                                                                                                                if (in_array("Karnataka High Court(Dharwad Branch)", $practice_courts)) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                }
                                                                                                                                                                                ?>>Karnataka High Court(Dharwad Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Karnataka High Court(Gulbarga Branch)" <?php
                                                                                                                                                                                if (in_array("Karnataka High Court(Gulbarga Branch)", $practice_courts)) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                }
                                                                                                                                                                                ?>>Karnataka High Court(Gulbarga Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Kerala High Court" <?php
                                                                                                                                                            if (in_array("Kerala High Court", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Kerala High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Madhya Pradesh High Court" <?php
                                                                                                                                                                    if (in_array("Madhya Pradesh High Court", $practice_courts)) {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    }
                                                                                                                                                                    ?>>Madhya Pradesh High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Madhya Pradesh High Court(Gwalior Branch)" <?php
                                                                                                                                                                                    if (in_array("Madhya Pradesh High Court(Gwalior Branch)", $practice_courts)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>Madhya Pradesh High Court(Gwalior Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Madhya Pradesh High Court(Indore Branch)" <?php
                                                                                                                                                                                    if (in_array("Madhya Pradesh High Court(Indore Branch)", $practice_courts)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>Madhya Pradesh High Court(Indore Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Madras High Court" <?php
                                                                                                                                                            if (in_array("Madras High Court", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Madras High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Madras High Court(Madurai Branch)" <?php
                                                                                                                                                                            if (in_array("Madras High Court(Madurai Branch)", $practice_courts)) {
                                                                                                                                                                                echo "checked";
                                                                                                                                                                            }
                                                                                                                                                                            ?>>Madras High Court(Madurai Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Manipur High Court" <?php
                                                                                                                                                            if (in_array("Manipur High Court", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Manipur High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Meghalaya High Court" <?php
                                                                                                                                                                if (in_array("Meghalaya High Court", $practice_courts)) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                }
                                                                                                                                                                ?>>Meghalaya High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Odisha High Court" <?php
                                                                                                                                                            if (in_array("Odisha High Court", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Odisha High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Patna High Court" <?php
                                                                                                                                                            if (in_array("Patna High Court", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Patna High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Punjab and Haryana High Court" <?php
                                                                                                                                                                        if (in_array("Punjab and Haryana High Court", $practice_courts)) {
                                                                                                                                                                            echo "checked";
                                                                                                                                                                        }
                                                                                                                                                                        ?>>Punjab and Haryana High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Rajasthan High Court" <?php
                                                                                                                                                                if (in_array("Rajasthan High Court", $practice_courts)) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                }
                                                                                                                                                                ?>>Rajasthan High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Rajasthan High Court(Jaipur Branch)" <?php
                                                                                                                                                                                if (in_array("Rajasthan High Court(Jaipur Branch)", $practice_courts)) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                }
                                                                                                                                                                                ?>>Rajasthan High Court(Jaipur Branch)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Sikkim High Court" <?php
                                                                                                                                                            if (in_array("Sikkim High Court", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Sikkim High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Supreme Court of India" <?php
                                                                                                                                                                if (in_array("Supreme Court of India", $practice_courts)) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                }
                                                                                                                                                                ?>>Supreme Court of India
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Tripura High Court" <?php
                                                                                                                                                            if (in_array("Tripura High Court", $practice_courts)) {
                                                                                                                                                                echo "checked";
                                                                                                                                                            }
                                                                                                                                                            ?>>Tripura High Court
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="practice_courts[]" value="Uttarakhand High Court" <?php
                                                                                                                                                                if (in_array("Uttarakhand High Court", $practice_courts)) {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                }
                                                                                                                                                                ?>>Uttarakhand High Court
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" name="submit" class="btn btn-danger" value="Submit">Update </button>
                                </form>
                            <?php } ?>
                            </div>
                    </div>
                </div>
            </div>
            <?php include_once 'footer.php'; ?>
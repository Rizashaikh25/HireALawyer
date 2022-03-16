<?php include_once'includes/header.php'; ?>
<!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Service Request </h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="">Service Request </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
            <!-- Request Form Start -->
                <b><marquee  direction="right" height="50px" style="color:red;">
                            Fill the below Service Request form according to the Name and Number registered with Adhaar card. And a Clear Passport size photograph.
                    </marquee></b> 
                <div class="container">
                    
                    <div class="row ">
                        <div class="col-lg-5 col-md-6">
                             
                                <form action="actions/service-request.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Name on Adhar Card</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email for further Communication</label>
                                        <input type="email" name="email" class="form-control" placeholder="Your Email" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label>Service Name</label>
                                        <input type="text" name="service_name" class="form-control" placeholder="Service Name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Passport Size Photo</label>
                                        <input type="file" name= "photo"class="form-control" trequired="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Any additional Information</label>
                                        <textarea class="form-control" placeholder="Message" name="message" required="required" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Document 1</label>
                                        <input class="form-control" type="file" name="document_1">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Document 2</label>
                                        <input class="form-control" type="file"  name="document_2">
                                    </div>

                                    <div>
                                        <button class="btn btn-dark" type="submit" name="submit">Send Message</button>
                                    </div>
                                </form>
                     
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>Request a Service</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p><br><br>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p><br><!-- <br><br><br> -->
                                <div>
                                        <a href="all-services.php"><button class="btn btn-dark">View all Services</button></a>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
            <!-- Documents Section -->
            <div class="container">
                    <div class="section-header">
                        <h2>Documents Required</h2><br>
                        <h3>Upload any 2 Documents</h3>
                    </div>

                    <div class="row">
                    <div class="col-md-4">
                       <ul class="ul-group">
                                <li>Adhar card</li>
                                <li>Pan card</li>
                                <li>Ration card </li>
                                <li>Driving License</li>
                                <li>Smart card</li>
                            </ul>
                    </div>
                    <div class="col-md-4">
                       <ul class="ul-group">
                                <li>Voter ID card.</li>
                                <li>Electricity bill.</li>
                                <li>Rent agreement.</li>
                                <li>Landline or postpaid mobile bill.</li>
                                <li>Proof of gas connection</li>
                            </ul>
                    </div>
                    <div class="col-md-4">
                       <ul class="ul-group">
                                <li>School leaving certificate</li>
                                <li>Birth certificate</li>
                                <li>Domicile certificate</li>
                                <li>Nationality certificate</li>
                                <li>Election Commission I/Card</li>
                               
                            </ul>
                    </div>
                    </div>
            </div>

<?php include_once'includes/footer.php'; ?>
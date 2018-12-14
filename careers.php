<!-- Header File Include -->
<?php $activePage = 'careers'; include "header.php"; ?>

<!-- Aws Page -->
<section id="career-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <div class="career-container career-b-clr">
                    <img src="img/careers.jpg" alt="banner-img" class="career-img img-fluid"/>
                    <div class="overlay-career">
                        <div class="career-text mt-4">
                            <h2>Join Our Team </h2>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cx-tab" class="mb-4">
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs nav-justified md-tabs white" id="myTabJust" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just" aria-selected="true"><i class="fa fa-users fa-lg"></i> &nbsp; Who We Are</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just" aria-selected="false"><i class="fa fa-suitcase fa-lg"></i> &nbsp; Job Openings</a>
                </li>
            </ul>
            <div class="tab-content card pt-5" id="myTabContentJust">
                <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="img/careersx.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-6">
                                <h2 class="mt-5">Who We Are</h2>
                                <p class="mt-4">
                                Blue Whale Technologies is mainly focused on Application development,
                                Outsourcing and Application solutions.<p>
                                    
                                <p>
                                Blue Whale Technologies specializes in providing solution 
                                for Big Data, Business Intelligence and Real Time IOT. 
                                </p>
                                
                                <p>
                                We are provide software solution
                                for complex data, 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-2 mb-5">
                                <h2 class="">Current Openings</h2>
                            </div>
                            <div class="col-md-6 mx-auto">
                                <div class="mb-4">
                                    <h5>Openings in U.S</h5>
                                </div>
								<?php
									include("config.php");
										
										$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
										
										if ($conn->connect_error) {
											die("Connection failed: " . $conn->connect_error);
										}
										$query = "SELECT * FROM `job_postings` WHERE `location` = 'US' ORDER BY `date` DESC";
											
										$result = mysqli_query($conn, $query);
								
									while($row = mysqli_fetch_assoc($result)){
								?>
                                <div class="card card-pd shadow-sm h-md-250 rm-border">
                                    <div class="card-body d-flex pb-0 align-items-start" id="current-openings">
                                        <div class="p-0"> <h6><?php echo $row['title']; ?></h6> </div>
                                        <div class="p-0 ml-auto"> Date: <?php echo date("M d, Y", $row['date']); ?> </div>
                                    </div>
                                    <div class="card-body d-flex  align-items-start" id="current-openings">
                                        <div class="left-content">
                                            <span class="text-muted">Job ID: <?php echo $row['job_id']; ?></span><br>
                                            <span class="text-muted">Experience: <?php echo $row['experience']; ?>  </span><br>
                                            <span class="text-muted">Location: <?php echo $row['location']; ?></span>
                                        </div>	
                                        <div class="right-content ml-auto ">
                                            <a class="btn btn-success btn-sm" target="_blank" href="./admin/jd/<?php echo $row['jd_file']; ?>">View Details</a>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Apply</button>
                                        </div>
                                    </div>
                                </div>
								<?php
									}
								?>
                              <!--  <div class="card card-pd shadow-sm h-md-250 rm-border">
                                    <div class="card-body d-flex pb-0 align-items-start" id="current-openings">
                                        <div class="p-0"> <h6> Data Analyst </h6> </div>
                                        <div class="p-0 ml-auto"> Date: 12-11-2018 </div>
                                    </div>
                                    <div class="card-body d-flex  align-items-start" id="current-openings">
                                        <div class="left-content">
                                            <span class="text-muted">Job ID: BW#1104</span><br>
                                            <span class="text-muted">Experience: 2  - 4 years  </span><br>
                                            <span class="text-muted">Location: US</span>
                                        </div>	
                                        <div class="right-content ml-auto ">
                                            <a class="btn btn-success btn-sm" target="_blank" href="uploads/Pro-elearning Review (01-Aug-2018).pdf">View Details</a>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Apply</button>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-md-6 mx-auto">
                                <div class="mb-4">
                                    <h5>Outside U.S </h5>
                                </div>
								<?php
									include("config.php");
										
										$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
										
										if ($conn->connect_error) {
											die("Connection failed: " . $conn->connect_error);
										}
										$query1 = "SELECT * FROM `job_postings` WHERE `location` = 'INDIA' ORDER BY `date` DESC";
											
										$result1 = mysqli_query($conn, $query1);
								
									while($row1 = mysqli_fetch_assoc($result1)){
								?>
								<div class="card card-pd shadow-sm h-md-250 rm-border">
                                    <div class="card-body d-flex pb-0 align-items-start" id="current-openings">
                                        <div class="p-0"> <h6><?php echo $row1['title']; ?></h6> </div>
                                        <div class="p-0 ml-auto"> Date: <?php echo date("M d, Y", $row1['date']); ?> </div>
                                    </div>
                                    <div class="card-body d-flex  align-items-start" id="current-openings">
                                        <div class="left-content">
                                            <span class="text-muted">Job ID: <?php echo $row1['job_id']; ?></span><br>
                                            <span class="text-muted">Experience: <?php echo $row1['experience']; ?>  </span><br>
                                            <span class="text-muted">Location: <?php echo $row1['location']; ?></span>
                                        </div>	
                                        <div class="right-content ml-auto ">
                                            <a class="btn btn-success btn-sm" target="_blank" href="./admin/jd/<?php echo $row1['jd_file']; ?>">View Details</a>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Apply</button>
                                        </div>
                                    </div>
                                </div>
								<?php
									}
								?>
                                <!--
                                <div class="card card-pd shadow-sm h-md-250 rm-border">
                                    <div class="card-body d-flex pb-0 align-items-start" id="current-openings">
                                        <div class="p-0"> <h6> Kafka Developer </h6> </div>
                                        <div class="p-0 ml-auto"> Date: 12-11-2018 </div>
                                    </div>
                                    <div class="card-body d-flex  align-items-start" id="current-openings">
                                        <div class="left-content">
                                            <span class="text-muted">Job ID: BW#1204</span><br>
                                            <span class="text-muted">Experience: 4  - 6 years  </span><br>
                                            <span class="text-muted">Location: INDIA</span>
                                        </div>	
                                        <div class="right-content ml-auto ">
                                            <a class="btn btn-success btn-sm" target="_blank" href="uploads/Pro-elearning Review (01-Aug-2018).pdf">View Details</a>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Apply</button>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Footer File Include -->
<?php include "footer.php"; ?>

<!-- The Modal -->
<div class="modal animated fadeIn myModalx" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">User Authentication</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="clmodal">
                <div class="form-row">
                    <div class="col-md-12 ">
                        <ul class="nav nav-pills md-pills nav-justified mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#signin-tab" role="tab" aria-controls="pills-home" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#signup-tab" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="col-md-10 mx-auto mb-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="signin-tab" role="tabpanel" aria-labelledby="pills-login-tab">
                                <form method="post" action="php/candidate-login.php">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Email</label>
                                        <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Password</label>
                                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Password" required="">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-outline-success btn-sm">Sign In</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="signup-tab" role="tabpanel" aria-labelledby="pills-signup-tab">
                                <form method="post" action="php/candidate-registered.php" name="register_students">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Firstname</label>
                                        <input type="text" name="first_name" class="form-control" id="formGroupExampleInput" placeholder="Firstname" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Lastname</label>
                                        <input type="text" name="last_name" class="form-control" id="formGroupExampleInput" placeholder="Lastname" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Email</label>
                                        <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Password</label>
                                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Password" required="">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-outline-success btn-sm">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


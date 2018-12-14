<?php
session_start();

if(empty($_SESSION['cemail'])){
	
	header('location: ../index.php');
	
}
?>
<?php include("header.php"); ?>
<?php $activePage = 'job-apply'; ?>
<?php include("sidebar.php"); ?>

<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Job Application Form</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                <form action="apply.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="Firstname">First Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="Lastname">Last Name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="Lastname">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="City">City</label>
                            <input type="text" name="city" class="form-control" placeholder="City" required>
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="State">State</label>
                            <input type="text" name="state" class="form-control" placeholder="State" required>
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="Country">Country</label>
                            <input type="text" name="country" class="form-control" placeholder="Country" required>
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="Zip">Zip Code</label>
                            <input type="text" name="zip" class="form-control" placeholder="Zip Code" required>
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="Mobile">Mobile No.</label>
                            <input type="tel" name="mobile" class="form-control" placeholder="Enter Mobile No."  required>
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Email" required>
                        </div>
						<div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Job ID</label>
                            <input type="text" name="jobid" class="form-control" id="exampleInputEmail1"  placeholder="Job ID" required>
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Job Title</label>
                            <input type="text" name="jobtitle" class="form-control" id="exampleInputEmail1"  placeholder="Job Title" required>
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Upload CV</label>
                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
                        </div>
                        <div class="clearfix "></div>
                        <div class="col-md-6" style="margin-top:15px;">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>

            
            <!-- END OVERVIEW -->
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->


<?php include("footer.php"); ?>
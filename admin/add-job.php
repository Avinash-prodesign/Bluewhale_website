<?php
session_start();

if(empty($_SESSION['email'])){
	
	header('location: index.php');
	
}
 $activePage = 'addjob';
 include("header.php"); 
 include("sidebar.php"); 
?>

<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Add New Job</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                <form method="post" action="php/add-job.php" enctype="multipart/form-data" >
                    <div class="row">
						<div class="col-md-6">
                            <label for="exampleInputEmail1">Job ID</label>
                            <input type="text" name="jobid" class="form-control" aria-describedby="emailHelp" placeholder="Enter Job ID" required>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Job Title</label>
                            <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter Job Title" required >
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Experience</label>
                            <input type="text" name="exp" class="form-control" aria-describedby="emailHelp" placeholder="Enter Experience" required>
                        </div>
                      <!--  <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Date</label>
                            <input type='text' class="form-control" placeholder="Enter Date" required/>
                        </div> -->
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Location</label>
                            <select class="form-control" name="location" id="sel1" required>
                                <option value="">Please Choose Location</option>
                                <option value="US">US</option>
                                <option value="INDIA">Outside US</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">File Upload</label>
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
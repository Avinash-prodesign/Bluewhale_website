<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
<?php
$id = $_GET['id'];
include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query = "SELECT * FROM `job_postings` WHERE `id` = '$id'";
        
    $result = mysqli_query($conn, $query);
	
	$row = mysqli_fetch_assoc($result);
?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Job Post Updating</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                <form method="post" action="php/job-update.php" enctype="multipart/form-data" >
                    <div class="row">
						<div class="col-md-6" style="display: none;">
                            <label for="exampleInputEmail1">Job ID</label>
                            <input type="text" name="id" class="form-control" aria-describedby="emailHelp" value="<?php echo $row['id']; ?>" >
                        </div>
						<div class="col-md-6">
                            <label for="exampleInputEmail1">Job ID</label>
                            <input type="text" name="jobid" class="form-control" aria-describedby="emailHelp" value="<?php echo $row['job_id']; ?>" >
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Job Title</label>
                            <input type="text" name="title" class="form-control" aria-describedby="emailHelp" value="<?php echo $row['title']; ?>"  >
                        </div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Experience</label>
                            <input type="text" name="exp" class="form-control" aria-describedby="emailHelp" value="<?php echo $row['experience']; ?>" >
                        </div>
                      <!--  <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Date</label>
                            <input type='text' class="form-control" placeholder="Enter Date" required/>
                        </div> -->
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Location</label>
                            <select class="form-control" name="location" id="sel1" value="" >
                                <option value="<?php echo $row['location']; ?>">Please Choose Location</option>
                                <option value="US">US</option>
                                <option value="INDIA">Outside US</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">File Upload</label>
                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $row['jd_file']; ?>">
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
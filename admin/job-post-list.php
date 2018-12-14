<?php
session_start();

if(empty($_SESSION['email'])){
	
	header('location: index.php');
	
}
 $activePage = 'jobpostlist';
 include("header.php"); 
 include("sidebar.php"); 
?>
<?php
include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query = "SELECT * FROM `job_postings` ORDER BY `date` DESC";
        
    $result = mysqli_query($conn, $query);
?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Job Post List</h3>
                </div>
            </div>
			<div class="row">
				<div class="col-md-12">
					<!-- TABLE HOVER -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Details</h3>
						</div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Job ID</th>
										<th>Title</th>
										<th>Experience</th>
										<th>Location</th>
										<th>JD File</th>
										<th>Action</th>
						            </tr>
								</thead>
								<tbody>
								<?php
									while($row = mysqli_fetch_assoc($result)){
								?>
									<tr>
										<td><?php echo $row['job_id']; ?></td>
										<td><?php echo $row['title']; ?></td>
										<td><?php echo $row['experience']; ?></td>
										<td><?php echo $row['location']; ?></td>
										<td><a href="./jd/<?php echo $row['jd_file']; ?>" class="btn btn-warning btn-sm" target="_blank"> <i class="fa fa-file-pdf-o"> </i></a></td>
										<td>
											<a href="job-update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm"> <i class="lnr lnr-pencil"> </i></a>
											<a href="php/job-delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"> <i class="lnr lnr-trash"> </i></a>
										</td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- END TABLE HOVER -->
				</div>
			</div>
            <!-- END OVERVIEW -->
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->


<?php include("footer.php"); ?>
<?php
session_start();

if(empty($_SESSION['cemail'])){
	
	header('location: ../index.php');
	
}
?>
<?php include("header.php"); ?>
<?php $activePage = 'previous-applications'; ?>
<?php include("sidebar.php"); ?>
<?php
include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query = "SELECT * FROM `apply_candidates` ORDER BY `date` DESC";
        
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
                    <h3 class="panel-title">Previous Applied Jobs Details</h3>
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
										<th>#</th>
										<th>JOB ID</th>
										<th>JOB Title</th>
										<th>Apply Date</th>
										<th>Upload CV</th>
										
						            </tr>
								</thead>
								<tbody>
								<?php
									$i = 1;
									while($row = mysqli_fetch_assoc($result)){
								?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $row['job_id']; ?></td>
										<td><?php echo $row['job_title']; ?></td>
										<td><?php echo date("M d, Y", $row['date']); ?></td>
										<td><a href="./cv/<?php echo $row['cv']; ?>" class="btn btn-warning btn-sm" target="_blank"> <i class="fa fa-file-pdf-o"> </i></a></td>
									</tr>
									<?php
										$i++;
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
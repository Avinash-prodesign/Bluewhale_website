<?php
session_start();

if(empty($_SESSION['email'])){
	
	header('location: index.php');
	
}
 $activePage = 'registercandidates';
 include("header.php"); 
 include("sidebar.php"); 
?>
<?php
include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query = "SELECT * FROM `registered_candidates` ORDER BY `date` DESC";
        
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
                    <h3 class="panel-title">Register Candiates List</h3>
                </div>
            </div>
			<div class="row">
				<div class="col-md-12">
					<!-- TABLE HOVER -->
					<div class="panel">
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Lastname</th>
										<th>Email</th>
						            </tr>
								</thead>
								<tbody>
								<?php
									$i = 1;
									while($row = mysqli_fetch_assoc($result)){
								?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $row['firstname']; ?></td>
										<td><?php echo $row['lastname']; ?></td>
										<td><?php echo $row['email']; ?></td>
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
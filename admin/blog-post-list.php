<?php
session_start();

if(empty($_SESSION['email'])){
	
	header('location: index.php');
	
}
 $activePage = 'blogpostlist';
 include("header.php"); 
 include("sidebar.php"); 
?>
<?php
include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query = "SELECT * FROM `blog` ORDER BY `date` DESC";
        
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
                    <h3 class="panel-title">Blog Post List</h3>
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
										<th>Post Title</th>
										<th>Blog Content</th>
										<th>Uploads</th>
										<th>Action</th>
						            </tr>
								</thead>
								<tbody>
								<?php
									$i = 1;
									while($row = mysqli_fetch_assoc($result)){
								?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $row['title']; ?></td>
										<td><?php echo $row['description']; ?></td>
										<td><?php echo $row['image']; ?></td>
										<td>
											<a href="blog-update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm" disabled > <i class="lnr lnr-pencil"> </i></a>
											<a href="php/blog-delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"> <i class="lnr lnr-trash"> </i></a>
										</td>
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
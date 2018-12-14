<?php $activePage = 'blogs'; include "header.php"; ?>
<?php
   
    $id = $_GET['id'];
    include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query = "SELECT * FROM `blog` WHERE `id` = '$id'";
        
    $result = mysqli_query($conn, $query);

	$row = mysqli_fetch_assoc($result);
?>
<section id="career-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <div class="career-container career-b-clr">
                    <img src="img/blogs.jpg" alt="banner-img" class="career-img img-fluid"/>
                    <div class="overlay-career">
                        <div class="career-text mt-4">
                            <h2>Blogs</h2>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog-post" class="my-5">
    <div class="container">
        <div class="row my-3">
            <div class="col-md-8">
                <h2 class="font-weight-bold mb-3"><strong><?php echo $row['title']; ?></strong></h2>
                <p><?php echo $row['description']; ?></p>
                <p><?php echo date("M d, Y", $row['date']); ?></p>
            </div>
            <div class="col-md-4">
                <div class="view overlay rounded z-depth-2">
                          <img class="img-fluid" src="admin/documents/<?php echo $row['image']; ?>" alt="Sample image">
                          <a> <div class="mask rgba-white-slight"> </div> </a>
                </div>
            </div>

        </div>
    </div>
</section>


<?php include "footer.php"; ?>
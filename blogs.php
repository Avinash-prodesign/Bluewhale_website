<?php $activePage = 'blogs'; include "header.php"; ?>
<?php
include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$sql = "SELECT * FROM blog ORDER BY id ASC LIMIT $start_from, $limit";  
$result = mysqli_query($conn, $sql);
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

<section id="blogs">
    <div class="container">
        <div class="row">
            <h2 class="h1-responsive font-weight-bold  my-5">Recent posts</h2>
			<?php


while($row=mysqli_fetch_assoc($result))
{
	?>
 <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-8 p-3">
                       <!-- <a href="#!" class="indigo-text">
                        <h6 class="font-weight-bold mb-3"><i class="fa fa-image pr-2"></i>Lifestyle</h6>
                        </a> -->
                        <h3 class="font-weight-bold mb-3"><strong><?php echo $row['title']; ?></strong></h3>
                        <p><?php echo $row['description']; ?></p>
                        <p><?php echo date("M d, Y", $row['date']); ?></p>
                        <a href="blog-post.php?id=<?php echo $row['id']; ?>" class="btn btn-indigo btn-md mb-lg-0 mb-4">Read more</a>
                    </div>
                    <div class="col-lg-4">
                        <div class="view overlay rounded z-depth-2">
                          <img class="img-fluid" src="admin/documents/<?php echo $row['image']; ?>" alt="Sample image">
                          <a> <div class="mask rgba-white-slight"> </div> </a>
                        </div>
                    </div>
                </div>
                <hr style="width:0px;" class="my-5">
            </div>
			<?php
}

?>
<?php  
$sql = "SELECT COUNT(id) FROM blog";  
$rs_result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);  
$pagLink = "<nav class='mx-auto mb-3'><ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {  
             $pagLink .= "<li><a href='blogs.php?page=".$i."'>".$i."</a></li>";  
};  
echo $pagLink . "</ul></nav>";  
?>

        </div>
    </div>
</section>

<?php include "footer.php"; ?>
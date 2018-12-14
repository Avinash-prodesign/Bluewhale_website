<?php
session_start();

if(empty($_SESSION['email'])){
	
	header('location: index.php');
	
}
 $activePage = 'addblog';
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
                    <h3 class="panel-title">Add New Blog</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                <form action="php/add-new-blog.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1">Post Title</label>
                            <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter Post Title" required>
                        </div>
                    <!--    <div class="col-md-6">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" name="description" class="form-control" aria-describedby="emailHelp" placeholder="Enter Description" required>
                        </div> -->
                        <div class="col-md-12" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Blog Content</label>
                            <textarea class="form-control" name="content" rows="5" id="comment" placeholder="Enter Blog Content" required></textarea>
                        </div>
                    <!--    <div class="col-md-6" style="margin-top:10px;">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="text" class="form-control" placeholder="Enter Date"  required/>
                        </div> -->
                   <!-- <div class="col-md-6" style="margin-top:10px;">
								<label for="exampleInputEmail1">Author</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Author Name" required>
						</div> -->
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
<?php 
session_start();

if(empty($_SESSION['cemail'])){
	
	header('location: ../index.php');
	
}




?>
<?php include("header.php"); ?>
<?php $activePage = 'dashboard'; ?>
<?php include("sidebar.php"); ?>

<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Weekly Overview</h3>
                    <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
                </div>
            </div>
            <!-- END OVERVIEW -->
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->


<?php include("footer.php"); ?>
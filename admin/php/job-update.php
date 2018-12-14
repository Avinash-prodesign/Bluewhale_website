<?php
extract($_POST);


$target_dir = "../jd/";

$filename = $_FILES["file"]["name"];

$target_file = $target_dir . basename($_FILES["file"]["name"]);

move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	if(empty($filename)){
		
		$query = "UPDATE `job_postings` SET `job_id`= '$jobid',`title`= '$title',`experience`= '$exp', `location`= '$location' WHERE `id` = '$id'";
		
	}
	else{
	
	$query = "UPDATE `job_postings` SET `job_id`= '$jobid',`title`= '$title',`experience`= '$exp',`location`= '$location',`jd_file`= '$filename' WHERE `id` = '$id'";
        
	}
    $result = mysqli_query($conn, $query);
	
	if($result){
		
		
		header('location: ../job-post-list.php');
		
	}
	
	$conn->close();
	
?>

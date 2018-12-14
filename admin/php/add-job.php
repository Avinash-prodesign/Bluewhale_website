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
	
	date_default_timezone_set("Asia/Kolkata");
	$pdate = date("Y-m-d h:i:sa");
	
	$date = strtotime($pdate);
	
	$query = "INSERT INTO `job_postings`(`job_id`, `title`, `experience`, `location`, `jd_file`, `date`) VALUES ('$jobid','$title','$exp','$location','$filename','$date')";
        
    $result = mysqli_query($conn, $query);
	
	if($result){
		
		
		header('location: ../job-post-list.php');
		
	}
	
	$conn->close();
	
?>

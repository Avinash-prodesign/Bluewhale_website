<?php
extract($_POST);

$target_dir = "./cv/";

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
	
	$query = "INSERT INTO `apply_candidates`(`fname`, `lname`, `email`, `mobile`, `address`, `city`, `state`, `country`, `zip`, `job_id`, `job_title`, `cv`, `date`) VALUES ('$fname','$lname','$email','$mobile','$address','$city','$state','$country','$zip','$jobid','$jobtitle','$filename','$date')";
        
    $result = mysqli_query($conn, $query);
	
	if($result){
		
		
		header('location: previous-applications.php');
		
	}
	
	$conn->close();
	
?>

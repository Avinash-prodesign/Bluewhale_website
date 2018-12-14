<?php
extract($_POST);

$target_dir = "../documents/";

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
	
	$query = "INSERT INTO `blog`(`title`, `description`, `date`, `image`) VALUES ('$title','$content','$date','$filename')";
        
    $result = mysqli_query($conn, $query);
	
	if($result){
		
		
		header('location: ../add-blog.php');
		
	}
	
	$conn->close();
	
?>

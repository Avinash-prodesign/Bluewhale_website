<?php
$id = $_GET['id'];
include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$query = "DELETE FROM `blog` WHERE `id` = '$id'";
        
    $result = mysqli_query($conn, $query);
	
	if($result){
		
		header('location: ../blog-post-list.php');
		
	}
	
?>
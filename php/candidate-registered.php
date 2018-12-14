<?php
extract($_POST);

include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	date_default_timezone_set("Asia/Kolkata");
	$pdate = date("Y-m-d h:i:sa");
	
	$date = strtotime($pdate);
	
	$query = "INSERT INTO `registered_candidates`(`firstname`, `lastname`, `email`, `password`, `date`) VALUES ('$first_name','$last_name','$email','$password', '$date')";
        
    $result = mysqli_query($conn, $query);
	
	if($result){
		?>
      <script type="text/javascript">
      alert("Successfully Registered...!");
      window.location.href = "../index.php";
      </script> 
      
      <?php
	
	}
	else{
		
		?>
      <script type="text/javascript">
      alert("Enter Valid Details to Registere....!");
      window.location.href = "../index.php";
      </script> 
      
      <?php
		
	}
	
	$conn->close();
	
?>

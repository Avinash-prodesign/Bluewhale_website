<?php

	include("config.php");
    
	$conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
    extract($_POST);
    					
     
        $query = "SELECT * FROM `registered_candidates` WHERE email = '$email' AND password = '$password'";
        
        $result = mysqli_query($conn, $query);
        
        $count = mysqli_num_rows($result);
        
        if($count > 0) {
        session_start();
        $_SESSION['cemail'] = $email;
         header('location:../user/index.php');
     
}else{
    
    ?>
      <script type="text/javascript">
      alert("Enter Valid User Name and Password  ! ");
      window.location.href = "../index.php";
      </script> 
   <?php
}
        
    
	
	$conn->close();
	
?>

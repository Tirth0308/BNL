<?php

include(config.php);

$conn = mysqli_connect($server ,$username,$password,$database);


if($_SERVER["REQUEST_METHOD"] == "POST") {
	$mail = $_POST['email'];
	$pass = $_POST['password'];

	$sql = "SELECT id FROM promoter WHERE email = '$mail' and password = '$pass'";
	
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
	$count = mysqli_num_rows($result);
	
		if($count == 1) {	 
		 echo "Succesful Login";
		}
		else {
         echo "<h2>Invalid Login Credentials</h2>";
		 echo "<h3>Redirecting to Login in 3 Seconds</h3>";
		 header('refresh: 3; url=Login.html');
      }
}
	  
?>
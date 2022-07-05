<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);
//******************************************************************************************************************

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$mail = $_POST['email'];
	$pass = $_POST['password'];
    
	$sql = "SELECT member_id FROM all_member WHERE email = '$mail' and pwd = '$pass' ";
	$typo = $_POST['typw'];
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
	$count = mysqli_num_rows($result);
	
		if($count == 1) {	 
		 // header("location: index.html");
			if($typo == "Director")
				echo "Hello Director";
			else if($typo == 'Customer')
				echo "Hello customer";
			else
				echo "good night";
		}
		else {
         echo "Invalid Login Credentials";
      }
}
	  
?>
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl_promoter";

$conn = mysqli_connect($server ,$username,$password,$database);


if($_SERVER["REQUEST_METHOD"] == "POST") {
	$mail = $_POST['email'];
	$pass = $_POST['password'];

	$sql = "SELECT id FROM promoter WHERE email = '$mail' and password = '$pass'";
	
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
	$count = mysqli_num_rows($result);
	
		if($count == 1) {	 
		 header("location: index.html");
		}
		else {
         echo "Invalid Login Credentials";
      }
}
	  
?>
/* signin.php */
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);


if($_SERVER["REQUEST_METHOD"] == "POST") {
	$mail = $_POST['email'];
	$pass = $_POST['password'];

	$sql = "SELECT id FROM bnl_collector_cred WHERE email = '$mail' and password = '$pass'";
	
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
	$count = mysqli_num_rows($result);
	
		if($count == 1) {	 
		 echo "<h1>Logged In Successfully<h1>";
		 echo "<h3>Redirecting to Home in 3 Seconds<h3>";
	header('refresh: 3; url=first.html');
		}
		else {
         echo "Invalid Login Credentials";
      }
}
	  
?>

<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl_promoter";

$conn = mysqli_connect($server ,$username,$password,$database);


$sname = $_POST['name'];
$mail = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO promoter(name,email,password) VALUES('$sname','$mail','$pass')";

if(mysqli_query($conn,$sql)==true){
	echo "<h2>Data inserted Successfully<h2>";
	echo "<h3>Redirecting to Login in 5 Seconds<h3>";
	header('refresh: 5; url=Login.html');
}else
{
	echo "<h2>Data insertion failed</h2>";
}
?>

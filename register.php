
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
	echo "Data inserted Successfully";
}else
{
	echo "Data insertion failed";
}
?>

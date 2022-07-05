
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);
$mem_id = $_POST['memberId'];
$name = $_POST['name'];
$mem_type =$_POST['mem_type'];
$mail = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$pass = $_POST['password'];


$sql = "INSERT INTO all_member(member_id,name,mem_type,email,phone,gender,pwd)  VALUES('$mem_id','$name','$mem_type', '$mail','$gender' , '$phone' , '$pass')";
if(mysqli_query($conn,$sql)==true){
	echo "Data inserted Successfully";
}else
{
	echo "Data insertion failed";
}
?>

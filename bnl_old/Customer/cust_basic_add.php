<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server,$username,$password,$database);
$pid = $_POST['cid'];
$collec_id = $_POST['collec_id'];
$fullname = $_POST['fullName'];

$Dob = $_POST['Dob'];
$Occupation = $_POST['Occupation'];
$MaritalStatus = $_POST['m_status'];
$email = $_POST['email'];
$Phone = $_POST['Phone'];
$enrolldate = $_POST['enrollDate'];
//

$sql = "INSERT INTO customer_basic(cid,collec_id,full_name,dob,occupation,m_status,mail,mob,enroll)
		VALUES('$pid','$collec_id','$fullname','$Dob','$Occupation','$MaritalStatus','$email','$Phone','$enrolldate')";

if(mysqli_query($conn,$sql)==true){
	echo "<h2>Data inserted Successfully<h2>";
	echo "<h3>Redirecting to KYC detail in 5 Seconds<h3>";
	header('refresh: 5; url=cust_kyc.php');
}else
{
	//header('refresh: 1; url=01.php');
	//header('refresh: 8; url=add_prom.php');
	echo "<h2>Data insertion failed</h2>";
}

?>

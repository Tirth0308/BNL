<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server,$username,$password,$database);
$pid = $_POST['p_id'];
$branch = $_POST['branch'];
$enrolldate = $_POST['enrollDate'];
$fullname = $_POST['fullName'];

$promDob = $_POST['promDob'];
$promOccupation = $_POST['promOccupation'];

$promMaritalStatus = $_POST['promMaritalStatus'];
$promSpouseName = $_POST['promSpouseName'];
$memberemail = $_POST['memberemail'];
$promPhone = $_POST['promPhone'];


$sql = "INSERT INTO promoter_basic(p_id,branch,date,fullname,dob,occupation,m_status,sp_name,email,mob)
		VALUES('$pid','$branch','$enrolldate','$fullname','$promDob','$promOccupation','$promMaritalStatus','$promSpouseName','$memberemail','$promPhone')";

if(mysqli_query($conn,$sql)==true){
	echo "<h2>Data inserted Successfully<h2>";
	echo "<h3>Redirecting to KYC detail in 5 Seconds<h3>";
	header('refresh: 5; url=prom_kyc.php');
}else
{
	//header('refresh: 1; url=01.php');
	//header('refresh: 8; url=add_prom.php');
	echo "<h2>Data insertion failed</h2>";
}

?>

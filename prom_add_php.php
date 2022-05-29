
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl_promoter";

$conn = mysqli_connect($server ,$username,$password,$database);


$branch = $_POST['branch'];
$enrolldate = $_POST['enrolldate'];
$title = $_POST['title'];
$promFirstName = $_POST['promFirstName'];
$promMiddleName = $_POST['promMiddleName'];
$promLastName = $_POST['promLastName'];
$promDob = $_POST['promDob'];
$promOccupation = $_POST['promOccupation'];
$promFatherName = $_POST['promFatherName'];
$promMotherName = $_POST['promMotherName'];
$promMaritalStatus = $_POST['promMaritalStatus'];
$promSpouseName = $_POST['promSpouseName'];
$memberemail = $_POST['memberemail'];
$promPhone = $_POST['promPhone'];


$sql = "INSERT INTO prom_details(branch,en_date,title,f_name,m_name,l_name,dob,occ,fath_name,moth_name,m_status,sp_name,email,mob) VALUES('$branch','$enrolldate','$title','$promFirstName','$promMiddleName','$promLastName','$promDob','$promOccupation','$promFatherName','$promMotherName','$promMaritalStatus','$promSpouseName','$memberemail','$promPhone')";

if(mysqli_query($conn,$sql)==true){
	echo "<h2>Data inserted Successfully<h2>";
	echo "<h3>Redirecting to Login in 5 Seconds<h3>";
	header('refresh: 5; url=Login.html');
}else
{
	echo "<h2>Data insertion failed</h2>";
}
?>

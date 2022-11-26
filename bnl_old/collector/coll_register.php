<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);
$title = $_POST['title'];
$gender = $_POST['gender'];
$FirstName = $_POST['f_name'];
$MiddleName = $_POST['m_name'];
$LastName = $_POST['l_name'];
$Dob = $_POST['dob'];
$m_status = $_POST['m_status'];
$nomName = $_POST['nom_name'];
$email = $_POST['email'];
$phone = $_POST['mob'];
$uid = $_POST['uid'];
$pan = $_POST['pan'];
$pass = $_POST['pass'];
$cnf_pass = $_POST['cnf_pass']; 
$doctype = $_POST['doctype'];
$upload = $_POST['myfile'];

$sql = "INSERT INTO bnl_collector_cred(title, gender, f_name, m_name, l_name, dob, m_status, nom_name, email, mob, uid, pan, pass, cnf_pass, doctype, doc_upload)                
     VALUES('$title','$gender','$FirstName','$MiddleName','$LastName','$Dob','$m_status','$nomName','$email','$phone','$uid','$pan','$pass','$cnf_pass','$doctype','$upload')";

if(mysqli_query($conn,$sql)==true){
	echo "<h2>Data inserted Successfully<h2>";
	echo "<h3>Redirecting to Login in 5 Seconds<h3>";
	//header('refresh: 5; url=Login.html');
}else
{
	echo "<h2>Data insertion failed</h2>";
}
?>
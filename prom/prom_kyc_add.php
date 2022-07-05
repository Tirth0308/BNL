<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server,$username,$password,$database);
$pid = $_POST['p_id'];
$uid = $_POST['uid'];
$pan = $_POST['pan'];
$address = $_POST['add'];

$nom_name = $_POST['nomName'];
$nom_rel = $_POST['nomRel'];
$nom_uid = $_POST['nomUid'];

$nom_pan = $_POST['nomPan'];
$nom_add = $_POST['nomAdd'];



$sql = "INSERT INTO promoter_kyc(p_id,uid,pan,address,nom_name,nom_rel,nom_uid,nom_pan,nom_add)
		VALUES('$pid','$uid','$pan','$address','$nom_name','$nom_rel','$nom_uid','$nom_pan','$nom_add')";

if(mysqli_query($conn,$sql)==true){
	echo "<h2>Data inserted Successfully<h2>";
	echo "<h3>Redirecting to Login in 5 Seconds<h3>";
	header('refresh: 5; url=add_prom.php');
}else
{
	//header('refresh: 1; url=01.php');
	//header('refresh: 8; url=add_prom.php');
	echo "<h2>Data insertion failed</h2>";
}

?>

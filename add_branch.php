<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);


$bcode = $_POST['bcode'];
$bname = $_POST['bname'];
$bloc = $_POST['bloc'];
$bsize = $_POST['bsize'];
$barea = $_POST['barea'];
$bcity = $_POST['bcity'];
$bstate = $_POST['bstate'];
$bdist = $_POST['bdist'];
$ifsc = $_POST['ifsc'];
$bm = $_POST['bm'];
$bac = $_POST['bac'];


$sql = "INSERT INTO branch( bcode, bname, bloc, bsize, barea, bcity, bstate, bdist, ifsc, bm, bac) VALUES( '$bcode', '$bname', '$bloc', '$bsize', '$barea', '$bcity', '$bstate', '$bdist', '$ifsc', '$bm', '$bac')";

if(mysqli_query($conn,$sql)==true){
	echo "<h2>Data inserted Successfully<h2>";
	echo "<h3>Redirecting to Login in 5 Seconds<h3>";
	header('refresh: 5; url=Login.html');
}else
{
	echo "<h2>Data insertion failed</h2>";
}
?>
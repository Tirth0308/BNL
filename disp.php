<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl_promoter";

$conn = mysqli_connect($server ,$username,$password,$database);
$id = $_GET['id'];
$sql = "SELECT f_name,l_name,uid FROM prom_details WHERE id = '$id'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

echo "<tr><td>$row['f_name']</td></tr>";
echo "<h3>$row['l_name']</h3>";
echo "<h3>$row['uid']</h3>";

?>
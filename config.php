/* config.php */
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "bnl_promoter";

$conn = mysqli_connect($server,$username,$password,$database);
if($conn)
{
	echo "</h3>Connected</h3>";
}
else
{
	echo "</h3>Not Connected</h3>";
}

?>
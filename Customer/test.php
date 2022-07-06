<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);
$set = $_POST['threshold'];
$sql = "INSERT INTO customer_basic(threshold)  VALUES('$set')";
if(mysqli_query($conn,$sql)==true){
	echo "Data inserted Successfully";
}else
{
	echo "Data insertion failed";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="./promotorForm.css" rel="stylesheet">
	<title></title>
</head>
<body>
	<form action="">
	<input type="text" name="threshold">
	<input type ="submit" value = "Submit">
	</form>
</body>
</html>
<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);
$set = $_POST['threshold'];
$id = $_POST['member_id'];

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
        $url = "https://";   
else  
        $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
$url_components = parse_url($url);
parse_str($url_components['query'], $params);

$sql = "UPDATE customer_basic SET threshold = '$set' WHERE member_id = '$params[member_id]' ";
if(mysqli_query($conn,$sql)==true){
	echo "Data inserted Successfully";
}else
{
	echo "error" . mysqli_error($conn);
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
	<form action="" method ="post">
	<input type="text" name="threshold">
	<input type ="submit" value = "Submit">
	</form>
</body>
</html>
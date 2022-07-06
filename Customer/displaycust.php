<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);
$result = mysqli_query($conn,"SELECT fname,lname,email FROM bnl_customer");
?>
<html>
<head>
<title>Page Title</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	<script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>


    <div class="content-wrapper" style="min-height: 1520px; ">
        <section class="content-header">

            <h1 style="text-align: center;"> Customers <small><a class="btn btn-danger"
                        href="customer_registration.php">+</a></small></h1>

	<table align = "center" border = "2px" style = "width:600px; line-height : 40px;" class = "table table-striped">
		<tr>
			<t>
				
				<th scope = "col">First Name</th>
				<th scope = "col">Last Name</th>
				<th scope = "col">Email</th>
				
			</t>
		</tr>
		
		<?php 
			while($row=mysqli_fetch_array($result))
			{
		?>
		<tr>
			
			<td scope = "row"><b><a style = "text-decoration : none" href = "customer_registration.php"><?php echo $row['fname'];?></a></b></td>
			<td scope = "row"><?php echo $row['lname'];?></td>
			<td scope = "row"><?php echo $row['email'];?></td>
			
			
		</tr>
		<?php
			}
		?>
	</table>



</body>
</html>
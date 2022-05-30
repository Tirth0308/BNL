<?php
//error_reporting(0);
include('config.php');
/* $query = "SELECT * FROM promoter"; */
$result = mysqli_query($conn,"SELECT * FROM promoter");
?>
<html>
<head>
<title>Page Title</title>
</head>
<body>

	<table align = "center" border = "2px" style = "width:600px; line-height : 40px;">
		<tr>
			<t>
				<th>id</th>
				<th>name</th>
				<th>email</th>
				<th>password</th>
			</t>
		</tr>
		
		<?php 
			while($row=mysqli_fetch_assoc($result))
			{
		?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['password'];?></td>
		</tr>
		<?php
			}
		?>
	</table>



</body>
</html>
<?php
//error_reporting(0);
include('config.php');
/* $query = "SELECT id,f_name,l_name,email,dob FROM prom_details"; */
$result = mysqli_query($conn,"SELECT id,f_name,l_name,email,dob FROM prom_details");
?>
<html>
<head>
<title>Page Title</title>
</head>
<body>

	<table align = "center" border = "2px" style = "width:600px; line-height : 40px;">
		<tr>
			<t>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>DOB</th>
				<th>Remove User</th>
			</t>
		</tr>
		
		<?php 
			while($row=mysqli_fetch_assoc($result))
			{
		?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><a href = "#"><?php echo $row['f_name'];?></a></td>
			<td><?php echo $row['l_name'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td align = "center"><a href="#" >Remove</a></td>
		</tr>
		<?php
			}
		?>
	</table>



</body>
</html>
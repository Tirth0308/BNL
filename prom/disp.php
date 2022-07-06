<?php
error_reporting(0);
include('config.php');
$result = mysqli_query($conn,"SELECT id,f_name,l_name,email,dob FROM prom_details");
?>
<html>
<head>
<title>Page Title</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

	<table align = "center" border = "2px" style = "width:600px; line-height : 40px;" class = "table table-striped">
		<tr>
			<t>
				<th scope = "col">Id</th>
				<th scope = "col">First Name</th>
				<th scope = "col">Last Name</th>
				<th scope = "col">Email</th>
				<th scope = "col">DOB</th>
				<th scope = "col">Remove User</th>
			</t>
		</tr>
		
		<?php 
			while($row=mysqli_fetch_assoc($result))
			{
		?>
		<tr>
			<td scope = "row"><?php echo $row['id'];?></td>
			<td scope = "row"><b><a style = "text-decoration : none" href = "promoter_details.html"><?php echo $row['f_name'];?></a></b></td>
			<td scope = "row"><?php echo $row['l_name'];?></td>
			<td scope = "row"><?php echo $row['email'];?></td>
			<td scope = "row"><?php echo $row['dob'];?></td>
			<td scope = "row"><button class = "btn btn-danger"><a style = "color: white; text-decoration : none" href="del.php?id=<?php echo $row["id"];?>">Delete</a></button></td>
		</tr>
		<?php
			}
		?>
	</table>



</body>
</html>
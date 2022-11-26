<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);
//******************************************************************************************************************

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$mail = $_POST['email'];
	$pass = $_POST['password'];
    
	$sql = "SELECT member_id FROM all_member WHERE email = '$mail' and pwd = '$pass' ";
	$typo = $_POST['typw'];
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);	
	$count = mysqli_num_rows($result);
    $var = "SELECT member_id FROM all_member WHERE email = '$mail' ";
	$varexec = mysqli_query($conn,$var);
    $col = mysqli_fetch_array($varexec,MYSQLI_ASSOC);	

		if($count == 1) {	 
		 // header("location: index.html");
			if($typo == "Director"){
				echo '<script language = "javascript">';
                echo 'window.location="http://localhost/bnl/BNL/Director/director_interface.php?member_id=' . $result . '"';
                echo '</script>';
			    //header("location: index.html");*
			}else if($typo == "Customer")
			{
				echo '<script language = "javascript">';
                echo 'window.location="http://localhost/bnl/BNL/Customer/Customer_interface.php?member_id=' . $col['member_id'] .'"';
                echo '</script>';

			}
			else
				echo "good night";
		}
		else {
         echo "Invalid Login Credentials";
      }
}
	  
?>
//************************************
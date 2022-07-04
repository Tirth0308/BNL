<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bnl";

$conn = mysqli_connect($server ,$username,$password,$database);
/*$branch = $_POST['branch'];
$enrolldate = $_POST['enrollDate'];
//$title = $_POST['title'];*
$promFirstName = $_POST['promFirstName'];
$promMiddleName = $_POST['promMiddleName'];
$promLastName = $_POST['promLastName'];
$promDob = $_POST['promDob'];
$promOccupation = $_POST['promOccupation'];
$promFatherName = $_POST['promFatherName'];
$promMotherName = $_POST['promMotherName'];
$promMaritalStatus = $_POST['promMaritalStatus'];
$promSpouseName = $_POST['promSpouseName'];
$memberemail = $_POST['memberemail'];
$promPhone = $_POST['promPhone'];*/
$promAdhar = $_POST['promAadhaar'];

$promPan = $_POST['promPan'];

$nomineeName = $_POST['nomineeName'];
$nomineerelation = $_POST['nomineerelation'];
$nomineephone = $_POST['nomineephone'];
$nomineeAadhaar = $_POST['nomineeAadhaar'];

$nomineePan = $_POST['nomineePan'];
$nomineeAddress = $_POST['nomineeAddress'];



/*$sql = "INSERT INTO bnl_customer(branch,enr_date,fname,mname,lname,dob,occupation,f_name,m_name,m_status,spname,email,mob)                
     VALUES('$branch','$enrolldate','$promFirstName','$promMiddleName','$promLastName','$promDob','$promOccupation','$promFatherName','$promMotherName','$promMaritalStatus','$promSpouseName','$memberemail','$promPhone')";*/
$sql = "INSERT INTO customer_complete(aadhaar,pan,nom_name,nom_rel,nom_mob,nom_aadhaar,nom_pan,nom_add)    VALUES('$promAdhar','$promPan','$nomineeName','$nomineerelation','$nomineephone','$nomineeAadhaar','$nomineePan','$nomineeAddress')";

if(mysqli_query($conn,$sql)==true){
	
	/*if(mysqli_query($conn,$sql2)==true){
		echo "<h2>Data inserted Successfully<h2>";
	    echo "<h3>Redirecting to Login in 5 Seconds<h3>";
	    header('refresh: 5; url=Login.html');
	}else{*/
	echo "<h2>Data inserted </h2>";
	
}else
{
	echo "<h2>Data insertion failed</h2>";
}


?>



<!-- pan,ra_no,me_no,cl_no,cl_rel,dl_no,nom_name,nom_rel,nom_mob,nom_uid,nom_vid,nom_pan,nom_add,sms
 '$promAdhar','$promPan','$nomineeName','$nomineerelation','$nomineephone','$nomineeAadhaar','$nomineeVoter','$nomineePan','$nomineeAddress','$switch' -->
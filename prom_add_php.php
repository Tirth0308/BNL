/* prom_add_php.php */
<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$database = "bnl_promoter";

$conn = mysqli_connect($server ,$username,$password,$database);

$branch = $_POST['branch'];
$enrolldate = $_POST['enrollDate'];
//$title = $_POST['title'];
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
$promPhone = $_POST['promPhone'];
$promAdhar = $_POST['promAadhaar'];
$promVoter = $_POST['promVoter'];
$promPan = $_POST['promPan'];
$promRation = $_POST['promRation'];
$meter = $_POST['meter'];
$clNo = $_POST['clNo'];
$clRelation = $_POST['clRelation'];
$dl = $_POST['dl'];
$nomineeName = $_POST['nomineeName'];
$nomineerelation = $_POST['nomineerelation'];
$nomineephone = $_POST['nomineephone'];
$nomineeAadhaar = $_POST['nomineeAadhaar'];
$nomineeVoter = $_POST['nomineeVoter'];
$nomineePan = $_POST['nomineePan'];
$nomineeAddress = $_POST['nomineeAddress'];
//$switch = $_POST['switch'];

$sql = "INSERT INTO prom_details(branch,en_date,f_name,m_name,l_name,dob,occ,fath_name,moth_name,m_status,sp_name,email,mob,uid,vid,pan,ra_no,me_no,cl_no,cl_rel,dl_no,nom_name,nom_rel,nom_mob,nom_uid,nom_vid,nom_pan,nom_add) VALUES('$branch','$enrolldate','$promFirstName','$promMiddleName','$promLastName','$promDob','$promOccupation','$promFatherName','$promMotherName','$promMaritalStatus','$promSpouseName','$memberemail','$promPhone', '$promAadhaar','$promVoter','$promPan','$promRation','$meter','$clNo','$clRelation','$dl','$nomineeName','$nomineerelation','$nomineephone','$nomineeAadhaar','$nomineeVoter','$nomineePan','$nomineeAddress')";

if(mysqli_query($conn,$sql)==true){
	echo '<script>alert("Record Successfully Inserted")</script>';
	header('refresh: 2; url=disp.php');
}else
{
	echo "<h2>Data insertion failed</h2>";
}

?>

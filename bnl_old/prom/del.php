<?php
include('config.php');
$sql = "DELETE FROM prom_details WHERE id='" . $_GET["id"] . "'";

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
	echo '<script>alert("Record Successfully deleted")</script>';
	header('refresh: 2; url=disp.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>



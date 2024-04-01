<?php 
require_once "connection.php";
?>


<?php
extract($_POST);
// $created_at=date("d M Y h:i:s:A");
$query="INSERT INTO servises(fullname,mobile,altmobile,address,aadhar,selUser,experience,created_at) VALUES ('$fullname',
'mobile','$altmobile','$address','$aadhar','$selUser','$experience',now())";

$query_run=mysqli_query($conn,$query);
if ($query_run) {
	echo "Successfully Registerd";
	// echo header("Location: http://localhost/menpower/index.php", true, 301);

}
else
{
	echo "FORM NOT REGISTERD:".mysqli_error($conn);
}
?>
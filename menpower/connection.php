<?php 
$host="localhost:3307";
$username="root";
$password="";
$dbname="menpower";

$conn=mysqli_connect($host,$username,$password,$dbname);

if ($conn) {
	// echo "Connection Successfully";
}
else {
	echo "Connection Faild".mysqli_error();
}
// mysqli_close($conn);
 ?>
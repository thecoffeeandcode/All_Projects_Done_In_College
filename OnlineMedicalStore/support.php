<?php 

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_connect');


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];
$problem = $_POST['problem'];
$radio-1 = $_POST['radio-1'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`F_Name`, `L_Name`, `Email`, `Ph_No`, `Address`, `City`, `State`, `Postcode`, `Description`, `P_Warranty`, `Bill`, `ID`) VALUES ('$fname', '$lname', '$email', '$phone', '$address','$city','$state','$postcode','$problem','','','0')";


// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
?>
<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("blood_bank");

$user_name = $_SESSION['user'];
$role = $_SESSION['role'];

if ($user_name && $role == 'BLOOD_BANK'){
	$firstName= $_REQUEST['first-name'];
	$lastName= $_REQUEST['last-name'];
	$mobileNumber= $_REQUEST['mobile'];
	$email= $_REQUEST['email'];
    $dateOfBirth= $_REQUEST['dob'];
	$gender= $_REQUEST['gender'];
	$bloodGroup= $_REQUEST['blood-group'];
	$addressArray = array(
		$_REQUEST['street'],
		$_REQUEST['city'],
		$_REQUEST['state'],
		$_REQUEST['country'],
		$_REQUEST['pin-code']
	);
	$address= implode(" | ", $addressArray);
	$user_type="CUSTOMER";
	$default_password = md5($_REQUEST['password']);
	
	$insertToLogin = mysql_query("INSERT INTO `blood_bank`.`login` 
	(`user_name`, `role`, `password`, `is_first_login`) VALUES 
	('$email', '$user_type', '$default_password', '1')");
	
	if(!$insertToLogin) {
		echo "<script type=\"text/javascript\"> alert(\"FAILED TO CREATE LOGIN FOR USER\"); window.history.back();</script>";
	} else {
		$insertToUser = mysql_query("INSERT INTO `blood_bank`.`users`
		(`email`, `mobile_number`, `first_name`, `last_name`, `dob`, `adderss`, `blood_group`, `gender`) VALUES
		('$email', '$mobileNumber', '$firstName', '$lastName', '$dateOfBirth', '$address', '$bloodGroup', '$gender')");
		if(!$insertToUser) {
			echo "<script type=\"text/javascript\"> alert(\"FAILED TO CREATE USER\"); window.history.back();</script>";
		}
		echo "<script type=\"text/javascript\"> alert(\"USER CREATEED SUCCESSFULLY\"); window.history.back();</script>";
	}
	
} else {
	header("location:../html/login.html");
}
?>

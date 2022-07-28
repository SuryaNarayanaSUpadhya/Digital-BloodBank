<?php
session_start();

mysql_connect("localhost", "root", "");
mysql_select_db("blood_bank");

$user_name = $_SESSION['user'];
$role = $_SESSION['role'];

if ($user_name && $role == 'BLOOD_BANK') {
	$email = $_REQUEST['email'];
	$height = $_REQUEST['height'];
	$weight = $_REQUEST['weight'];
	$bloodPressure = $_REQUEST['blood-pressure'];
	$alcoholConsumed = $_REQUEST['alcohol-consumed'] == 'true' ? 1 : 0;
	$hadsufficientFood = $_REQUEST['had-sufficient-food'] == 'true' ? 1 : 0;
	$hadEnoughSleep = $_REQUEST['had-enough-sleep'] == 'true' ? 1 : 0;
	$SufferFromAnyDiseases = $_REQUEST['suffer-from-any-diseases'] == 'true' ? 1 : 0;

	$insertToUserDetails = mysql_query("INSERT INTO `blood_bank`.`user_details` 
	(`id`, `email`, `height`, `weight`,`blood_pressure`, `alcohol_consumed`, `had_sufficient_food`, `had_enough_sleep`,
	`suffer_from_any_diseases`,`created_at`)
	VALUES (NULL, '$email', '$height', '$weight','$bloodPressure', '$alcoholConsumed', '$hadsufficientFood', '$hadEnoughSleep',
	'$SufferFromAnyDiseases',NULL)");
	if (!$insertToUserDetails) {
		echo "<script type=\"text/javascript\"> alert(\"FAILED TO ADD HEALTH DETAILS\"); window.history.back();</script>";
	} else {
		echo "<script type=\"text/javascript\"> alert(\"USER HEALTH DETAILS STORED SUCCESSFULLY\"); window.location.assign('./frame.php')</script>";
	}
} else {
	header("location:../html/login.html");
}

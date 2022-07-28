<?php
session_start();
$user_name = $_SESSION['user'];
$role = $_SESSION['role'];
?>

<html>
<style>
a {
    width: 10%;
    background-color: black;
	text-decoration: none;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
a:hover {
    background-color: #45a049;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 50px;
	height: calc(100% - 116px);
}
body{
	margin:0;
}
</style>
<body>
<?php 
if ($role == "BLOOD_BANK")
	echo "
    <div align='center'>  	             
		<a href='./user_form.php'>CREATE USER</a>
		<a href='./accept_form.php'>ACCEPT BLOOD</a>
		<a href='./check_availability.php'>CHECK AVAILABILITY</a>
	</div>";
else {
	echo "<div align='center'>  	             
		<a href='./check_availability.php'>CHECK AVAILABILITY</a>
		<a href='./donations.php'>TOTAL DONATIONS</a>
	</div>";
}
?>
</body>
</html>

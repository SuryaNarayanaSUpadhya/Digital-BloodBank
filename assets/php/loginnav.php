<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/a1.css">
</head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 10%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button] {
    width: 10%;
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button]:hover {
    background-color: #45a049;
}
input[type=submit]:hover {
    background-color: #45a049;
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style><body class="w3-black">
<?php
session_start();
if(isset($_SESSION['user']))
{
	$usr=$_SESSION['user'];
echo "<a href=\"./logout.php\" target=\"_parent\"><img src='../icons/logout.png' style='width:50px'> <p style=\"font-size: 15px;\">LOGOUT </p> </a>";
echo " <p style=\"font-size: 15px;\">".$usr."&nbsp&nbsp|&nbsp&nbsp</p><img src='../icons/user.png' style='width:50px'>";
}
else
	echo "<script type=\"text/javascript\">
   window.top.location.href='../../index.html';
</script>";
?>
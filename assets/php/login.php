<?php
$u = $p = 1;
mysql_connect("localhost","root","");
mysql_select_db("blood_bank");
session_start();
$user_name=$_REQUEST['uname'];
$password=$_REQUEST['psw'];
$md5_password=md5($password);
$users=mysql_query("select * from login");
while($row=mysql_fetch_array($users))
{
	$db_user_name=$row['user_name'];
	$db_password=$row['password'];
	if($user_name==$db_user_name)
	{
		if($md5_password==$db_password)
		{
				$_SESSION['user']=$user_name;
				$_SESSION['role']=$row['role'];
				header("location:../html/frame.html");
		}
  		else
		{
			$p=0;
		}
		break;
	}
 	else
	{
		$u=0;
    }
}
if(!$u)
	echo "<script type=\"text/javascript\"> alert(\"USERNAME DOES NOT MATCH\"); window.history.back();</script>";
if(!$p)
	echo "<script type=\"text/javascript\"> alert(\"PASSWORD INCORRECT\"); window.history.back();</script>";
?>
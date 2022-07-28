<?php
session_start();
$user_name = $_SESSION['user'];
$role = $_SESSION['role'];

mysql_connect("localhost", "root", "");
mysql_select_db("blood_bank");
$blood_group= $_REQUEST['blood-group'];

?>

<html>
<style>
	input[type=text],
	select,
	input[type=password],
	input[type=date] {
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

	body {
		margin: 0;
	}
	
	tr td, tr th {
		text-align: center;
	}
	
	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	
	table {
		margin: 50px auto;
	}
</style>

<script type="text/javascript">
function printPage() {
	const buttons = document.querySelectorAll('#btn');
	buttons.forEach(button => {
		button.style.display = 'none';
	});
	window.print();
	buttons.forEach(button => {
		button.style.display = 'inline-block';
	});
}
</script>

<body>
	<p style='color: #333333; font-weight: bold; color: OrangeRed; margin-top: 20px;' align='center'>
	Available blood stock with donor details for <?php echo $blood_group; ?>
	</p>
        <table width='50%' align='center'>
		<tr>
		<th>Name</th>
		<th>Mobile Number</td>
		<th>Email</th>
		<th>Available units</th>
		</tr>
	<?php
		$result = mysql_query("SELECT DISTINCT first_name, last_name, mobile_number, user_details.email as email, count(user_details.email) as count FROM users INNER JOIN user_details ON users.email=user_details.email WHERE blood_group='$blood_group' GROUP by user_details.email;");
		while($row=mysql_fetch_array($result)) {
			$name = $row['first_name'] . " " . $row['last_name'];
			$mobile_number = $row['mobile_number'];
			$email = $row['email'];
			$count = $row['count'];
			echo "<tr><td>$name</td><td>$mobile_number</td><td>$email</td><td>$count</td></tr>";
		}
	?>
		</table>
		<p style='font-weight: bold;' align='center'>
		<input id="btn" type=button value='BACK' onclick='window.history.back();' />
		<input id="btn" type=button value='PRINT' onclick='printPage()' />
		</p>
		
		</body>
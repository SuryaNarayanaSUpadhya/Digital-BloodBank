<?php
session_start();
$user_name = $_SESSION['user'];

mysql_connect("localhost", "root", "");
mysql_select_db("blood_bank");

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
	
	table, th, td {
		border: 1px solid black;
		text-align: center;
	}
	
	table {
		border-collapse: collapse;
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
<div>
	<p style='color: #333333; font-weight: bold; color: OrangeRed; margin-top: 20px;' align='center'>
	TOTAL DONATIONS
	</p>
	</div>
    <div align='center' >  	             
        <table width='50%'>
			<tr>
              <th>Sl. No</th>
			  <th>Height</th>
			  <th>Weight</th>
			  <th>Blood Pressure (mm/hg)</th>
			  <th>Donated On</th>
			</tr>
	<?php
			$result = mysql_query("SELECT * FROM user_details WHERE email='$user_name';");
			$i=1;
			while($row=mysql_fetch_array($result)) {
				$id=$row['id'];
				$height = $row['height'];
				$weight = $row['weight'];
				$bloodPressure = $row['blood_pressure'];
				$createdAt = date('M j Y g:i A', strtotime($row['created_at']));
				echo "<tr><td>$i</td><td>$height</td><td>$weight</td><td>$bloodPressure</td><td>$createdAt</td><td><a href='./certificate.php?id=$id'>View certificate</a></td></tr>";
				$i++;
			}
	?>
		</table>
		<p style='font-weight: bold;' align='center'>
		<input id="btn" type=button value='BACK' onclick='window.history.back();' >
		<input id="btn" type=button value='PRINT' onclick='printPage()' >
	</div>		
</body>

</html>
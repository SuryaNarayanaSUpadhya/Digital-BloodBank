<?php
session_start();
$user_name = $_SESSION['user'];
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

	input[type=submit], input[type=button] {
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

	tr td:nth-child(1)::before {
		content: '*';
		color: red;
	}

</style>
<body>
<div>
	<p style='color: #333333; font-weight: bold; color: OrangeRed; margin-top: 20px;' align='center'>
	Availability Check
	</p>
	</div>
<form name=f33 action='./donors_list.php' method=post>
    <div align='center' >
        <table width='50%'>           
				<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Select Blood Group :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<select name='blood-group'>
							<option value='A+'>A+</option>
							<option value='A-'>A-</option>
							<option value='B+'>B+</option>
							<option value='B-'>B-</option>
							<option value='AB+'>AB+</option>
							<option value='AB-'>AB-</option>
							<option value='O+'>O+</option>
							<option value='O-'>O-</option>
						</select>
					</td>
			</tr>
		</table>
				<input id="btn" type=button value='BACK' onclick='window.history.back();' />
			<input id="btn" type=submit value='SHOW AVAILABLE STOCK/DONORS' />
	</div>
	</form>
</body>

</html>
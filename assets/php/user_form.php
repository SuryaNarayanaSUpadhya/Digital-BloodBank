<?php
session_start();
$user_name = $_SESSION['user'];
$role = $_SESSION['role'];
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

	tr td:nth-child(1)::before {
		content: '*';
		color: red;
	}
</style>

<body>
	<?php
	if ($role == "BLOOD_BANK")
		echo "
<form name=f33 action='./user_form_to_db.php' method=post>
<div>
	<p style='color: #333333; font-weight: bold; color: OrangeRed; margin-top: 20px;' align='center'>
		User Details
	</p>
	</div>
    <div align='center'>  	             
        <table width='50%'>           
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					First Name :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='first-name' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Last Name :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='last-name' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Mobile Number :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='mobile' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Email :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='email' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Date of Birth :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='date' name='dob' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Gender :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<select name='gender'>
							<option value='male'>Male</option>
							<option value='female'>Female</option>
							<option value='others'>Others</option>
						</select>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Blood Group :
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
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Address :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Street/ House/ Entrance :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='street' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					City :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='city' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					State :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='state' value='Karnataka' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Country :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='country' value='India' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Pin Code :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='pin-code' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Default Login Password :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='password' value='abc@123' required>
					</td>
			</tr>
		</table>
		<p style='font-weight: bold;' align='center'>
		<input type=button value='BACK' onclick='window.history.back();' >
		<input type=submit value='CREATE' >
	</div>		
</form>";
	else {
		echo "Not avalid role";
	}
	?>
</body>

</html>
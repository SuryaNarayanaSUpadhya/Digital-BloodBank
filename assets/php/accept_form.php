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
<form name=f33 action='./accept_form_to_db.php' method=post>
<div>
	<p style='color: #333333; font-weight: bold; color: OrangeRed; margin-top: 20px;' align='center'>
		User Health Details
	</p>
	</div>
    <div align='center' id='wrapper'>  	             
        <table width='50%'>
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
					Height :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='height' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Weight :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='weight' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Blood Pressure (mm/hg):
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='text' name='blood-pressure' value='' required>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Alcohol Consumed :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='radio' name='alcohol-consumed' value=true>Yes</input>
						<input type='radio' name='alcohol-consumed' checked  value=false>No</input>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Had Sufficient Food :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='radio' name='had-sufficient-food' value=true checked>Yes</input>
						<input type='radio' name='had-sufficient-food'  value=false>No</input>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Had Enough Sleep :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='radio' name='had-enough-sleep' value=true checked>Yes</input>
						<input type='radio' name='had-enough-sleep'  value=false>No</input>
					</td>
			</tr>
			<tr>
                <td style='width: 40%; text-align: left' align='left'>
					Suffer From Any Diseases :
                </td>
                    <td style='width: 60%; text-align: left' align='left' >
						<input type='radio' name='suffer-from-any-diseases' value=true>Yes</input>
						<input type='radio' name='suffer-from-any-diseases' checked  value=false>No</input>
					</td>
			</tr>
		</table>
		<p style='font-weight: bold;' align='center'>
		<input type=button value='BACK' onclick='window.history.back();' >
		<input type=submit value='SUBMIT' >
	</div>		
</form>";
	else {
		echo "Not avalid role";
	}
	?>
</body>

</html>
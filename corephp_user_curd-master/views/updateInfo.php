<?php
	if(isset($_POST['submit'])){
		if((empty($_POST['cp'])) || (empty($_POST['np'])) || (empty($_POST['cnp']))){
			echo "Give all info PLZ!!!";
		}
		else{
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "UPDATE users SET password='{$_POST['np']}' WHERE username='{$_POST['cp']}'";
			//$sql = "DELETE FROM users WHERE username='{$_POST['np']}'";
			$result = mysqli_query($conn, $sql);
			echo "Updated Successfully:)";
		}
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>update Info</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>Update Info</legend>
			<table border="1px">
				<tr>
					
					<td>Current Password</td>
					<td>New Password</td>
					<td>Confirm Password</td>
				</tr>
				<tr>
					
					<td><input type="Password" name="cp"></td>
					<td><input type="Password" name="np"></td>
					<td><input type="Password" name="cnp"></td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="submit" name="submit" value="submmit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>


</body>
</html>
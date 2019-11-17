<?php
	if(isset($_POST['submit'])){
		if((empty($_POST['password']))){
			echo "Give all info PLZ!!!";
		}
		else{
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "DELETE FROM users WHERE password='{$_POST['password']}'";
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
			<legend>Delete Info</legend>
			<table border="1px">
				<tr>
				
					<td>Confirm Password</td>
					<td>Confirm Emails</td>
				</tr>
				<tr>
					
					<td><input type="Password" name="password"></td>
					<td><input type="Password" name="cpassword"></td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="submit" name="submit" value="submit"> | <a href= "login.php">SignIn</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>


</body>
</html>
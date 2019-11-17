<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<br>
	<br>

	<table border="1" >
		<tr>
			<th>UserName</th>
			<th>Password</th>
			<th>Email</th> 
			<th>Action</th> 
		</tr>
		
			<?php
				$conn = mysqli_connect('localhost', 'root', '', 'webtech');
				$sql = "select * from users";
				$result = mysqli_query($conn, $sql);
				while($user = mysqli_fetch_assoc($result)){
					//print_r($user);
					?>
					<tr>
					<td> <?php echo $user['username']; ?> </td>
					<td> <?php echo $user['password']; ?> </td>
					<td> <?php echo $user['email']; ?> </td>
					
					<td>
						<a href="updateInfo.php">EDIT</a> |
						<a href="deleteInfo.php">DELETE</a> |
					</td>
					</tr>
				<?php	
					
				}
			?>	
		
	</table>
</body>
</html>
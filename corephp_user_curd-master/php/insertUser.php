<?php
	session_start();
	require_once('functions.php');

	if(isset($_POST['submit'])){
		$check = register($_POST['username'], $_POST['password'], $_POST['email']);
		if($check){
			echo "Added successfully:)";
		}
		else{
			echo "Invalid operation";
		}
	}
	else{
		header('location: ../views/login.php');
	}

?>
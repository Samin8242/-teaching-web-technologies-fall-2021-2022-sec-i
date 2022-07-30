<?php 
	session_start();
	require_once('userModel.php');

	$username = $_REQUEST['name'];
	$password = $_REQUEST['password'];

	if ($name == null || $password == null) {
		echo "invalid name/password <br>";
	}else{

		$status = login($name, $password);

		if($status){
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/home.php');
		}else{
			echo "invalid user!";
		}

		
	}
?>
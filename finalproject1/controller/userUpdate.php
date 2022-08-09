<?php 
	session_start();
	include ('../model/config.php');
	//require_once('../model/config.php');
	if(isset($_REQUEST['update'])){
		$name = $_REQUEST['name'];
		$dob=$_REQUEST['dob'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$id = $_REQUEST['id'];

		$sql = "UPDATE users SET name='{$name}', dob='{$dob}', email='{$email}',password='{$password}',gender='{$gender}', address='{$address}' WHERE id='{$id}'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";
			header('location: ../view/userlist.php');

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }
	}
?>
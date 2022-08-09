<?php 
	
		$username = $_REQUEST['username'];
		$gender = $_REQUEST['gender'];
		$dob=$_REQUEST['dob'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$cpassword = $_REQUEST['cpassword'];
		$fname = $_REQUEST['formname'];
		$id= rand();

		
	if ($username == null || $gender == null || $password == null ||  $email == null || $cpassword == null ||  $dob == null ) {
		echo "invalid username/password/email <br>";
	}
	elseif($password != $cpassword )
    {
        echo "invalid password";
    }
	else{
		$data = $id."|".$username."|".$password."|".$email."|".$dob."|".$gender."\r\n";
		$file = fopen('../model/user.txt', 'a');
		fwrite($file, $data);

			if($fname == "create"){
				header('location: index.php');	
			}else{
				header('location: ../view/login.php');
			}
	}
	
?>
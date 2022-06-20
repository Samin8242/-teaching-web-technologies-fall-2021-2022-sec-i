<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $id = $_REQUEST['id'];
	$password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];
	$username = $_REQUEST['username'];
    $user = $_REQUEST['user'];
	//$fname = $_REQUEST['formname'];

	if ($id == null || $username == null || $password == null || $cpassword == null) {
		echo "invalid username/password/email <br>";
	}
    elseif($password != $cpassword )
    {
        echo "invalid password";
    }
    else {
		$data = $id."|".$password."|".$username."|".$user."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $data);

			if($fname == "create"){
				header('location: registration.php');	
			}else{
				header('location: login.php');
			}
	}
}
	



?>
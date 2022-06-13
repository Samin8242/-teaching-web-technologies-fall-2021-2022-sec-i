<?php 
	session_start();

	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$cpassword = $_REQUEST['cpassword'];
		$email = $_REQUEST['email'];	
	}

	if ($username != null && $password != null && $cpassword != null && $email != null ) {
		if($password==$cpassword)
        {
            $_SESSION['status'] = true;
            header('location: login.html');
        }
        else{
            echo "Confirm Password does not match";
            //header('location: singup.php');
        }
        
	}
    else{
        echo "Submission Error";
    }
?>
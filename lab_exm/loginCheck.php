<?php 
	session_start();

    $id = $_REQUEST['id'];
	$password = $_REQUEST['password'];

	if ($id == null || $password == null) {
		echo "invalid username/password <br>";
	}else{
		$file = fopen('user.txt', 'r');
		while (!feof($file)) {
				$line = fgets($file);
				$user = explode('|', $line);
				print_r($user);
				echo "<br>";
				if($id == trim($user[0]) && $password == trim($user[1])){
					setcookie('status', 'true', time()+3600, '/');
                    if(trim($user[3]) == "admin")
                    {
                        header('location: adminhomepage.php');  
                    }
					elseif(trim($user[3]) == "user")
                    {
                        header('location: userhomepage.php');  
                    }
				}

		}
		echo "invalid user!";
	}



?>
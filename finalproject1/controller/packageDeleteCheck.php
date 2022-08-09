<?php 
	session_start();
	
	if(isset($_REQUEST['delete'])){
		
        $id = $_REQUEST['id'];
		$from = $_REQUEST['from'];
		$to = $_REQUEST['to'];
		$time = $_REQUEST['time'];
		$price = $_REQUEST['price'];

		if($id != null ){
			
			$file = fopen('../model/package.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] != $id){
					//$line = $id."|".$username."|".$password."|".$email."\r\n";
					$updatedContent .= $line;
				}
				//$updatedContent .= $line;
				
			}

			$file = fopen('../model/package.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../view/package.php');

		}else{
			echo "null submission";
		}
	}else header('location: ../view/package.php');

?>
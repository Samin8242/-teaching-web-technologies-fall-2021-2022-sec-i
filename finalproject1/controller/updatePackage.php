<?php 
	session_start();
	
	if(isset($_REQUEST['update'])){

		$from = $_REQUEST['from'];
		$to=$_REQUEST['to'];
		$time = $_REQUEST['time'];
		$price = $_REQUEST['price'];
        $id = $_REQUEST['id'];
		
		if($id !=null && $from != null && $to != null && $time != null && $price != null  ){
			
			$file = fopen('../model/package.txt', 'r');
			$updatedContent = "";

			while(!feof($file)){
				$line = fgets($file);
				$user = explode('|', $line);
				
				if($user[0] == $id){
					$line = $id."|". $from."|".$to."|".$time."|".$price."\r\n";
					//$updatedContent .= $line;
				}
				$updatedContent .= $line;
				
			}

			$file = fopen('../model/package.txt', 'w');
			fwrite($file, $updatedContent);
			header('location: ../view/package.php');

		}else{
			echo "null submission";
		}
	}
?>
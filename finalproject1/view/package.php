<?php 
 //include('header.php');
	require_once('../controller/header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User list</title>
</head>
<body>
<h1 style="height:80px;background-color:Tomato;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
		<a href="adminhomepage.php"> Back </a> | 
		<a href="../controller/logout.php"> logout </a>
		<br>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>From</th>
				<th>TO</th>
                <th>Time</th>
				<th>Price(tk)</th>             
				<th>ACTION</th>
			</tr>

			<?php 
				$file = fopen('../model/package.txt', 'r');
				while(!feof($file)){
					$user = fgets($file);
					$user = explode("|", $user);
					//print_r($user);
					if(count($user) > 1){
			?>

			<tr>
				<td><?=$user[0]?></td>
				<td><?=$user[1]?></td>
				<td><?=$user[2]?></td>
				<td><?=$user[3]?></td>
                <td><?=$user[4]?></td>
				
				<td>
					<a href="editPackage.php?id=<?=$user[0]?>"> EDIT </a> | 
					<a href="packageDelete.php?id=<?=$user[0]?>"> DELETE </a> 

				</td>
			</tr>

			<?php
		}
				}
			?>
		</table>
</body>
</html>
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
		<b>Bus Info</b>
		<table border="1">
			<tr>
				<th>From</th>
				<th>To</th>
				<th>Time</th>
                <th>Date</th>
				
			</tr>

			<?php 
				$file = fopen('../model/bus.txt', 'r');
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
				
				
				
			</tr>

			<?php
		}
				}
			?>
		</table>


		<br>
		<b>Plane Info</b>
		<table border="1">
			<tr>
				<th>From</th>
				<th>To</th>
				<th>Time</th>
                <th>Date</th>
				
			</tr>

			<?php 
				$file = fopen('../model/plane.txt', 'r');
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
				
				
				
			</tr>

			<?php
		}
				}
			?>
		</table>

		<br>
		<b>Train Info</b>
		<table border="1">
			<tr>
				<th>From</th>
				<th>To</th>
				<th>Time</th>
                <th>Date</th>
				
			</tr>

			<?php 
				$file = fopen('../model/trin.txt', 'r');
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
				
				
				
			</tr>

			<?php
		}
				}
			?>
		</table>

		<br>
		<b>Ship Info</b>
		<table border="1">
			<tr>
				<th>From</th>
				<th>To</th>
				<th>Time</th>
                <th>Date</th>
				
			</tr>

			<?php 
				$file = fopen('../model/ship.txt', 'r');
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
				
				
				
			</tr>

			<?php
		}
				}
			?>
		</table>
</body>
</html>
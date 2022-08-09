<?php 
	require_once('../controller/header.php');
	$id= $_REQUEST['id'];
	$file = fopen('../model/package.txt', 'r');
	$data = "";
	while(!feof($file)){
		$user = fgets($file);
		$user = explode('|', $user);
		if($user[0] == $id){
			$data = $user;
			break;
		}
	}
?>

<html>
<head>
	<title>Delete package</title>
</head>
<body>
<h1 style="height:80px;background-color:Tomato;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>

	<a href="package.php"> Back </a> |
	<a href="../controller/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controller/packageDeleteCheck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Delete User</legend>
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" value="<?=$data[0]?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="delete" value="Delete"></td>
				<td><input type="submit" name="back" value="Back"></td>
			
			</tr>


		</table>
		</fieldset>
	</form>
</body>
</html>
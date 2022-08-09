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
	<title>Edit Package</title>
</head>
<body>
<h1 style="height:80px;background-color:Tomato;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>

	<a href="userlist.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controller/updatePackage.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Update Package</legend>
		<table>
        <tr>
				<td>ID</td>
				<td><input type="text" name="id" value="<?=$data[0]?>"></td>
			</tr>
			<tr>
				<td>From</td>
				<td><input type="text" name="from" value="<?=$data[1]?>"></td>
			</tr>
			<tr>
				<td>To</td>
				<td><input type="text" name="to" value="<?=$data[2]?>"></td>
			</tr>
            <tr>
				<td>Time</td>
				<td><input type="text" name="time" value="<?=$data[3]?>"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" value="<?=$data[4]?>"></td>
			</tr>
			
			
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>
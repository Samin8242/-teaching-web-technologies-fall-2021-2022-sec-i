<?php 
	/*require_once('../controller/header.php');
	$id= $_REQUEST['id'];
	$file = fopen('../model/user.txt', 'r');
	$data = "";
	while(!feof($file)){
		$user = fgets($file);
		$user = explode('|', $user);
		if($user[0] == $id){
			$data = $user;
			break;
		}
	}*/

	require_once('../model/config.php');
	if (isset($_REQUEST['id'])) {

		$id = $_REQUEST['id']; 
	
		//$sql = "SELECT * FROM 'users' WHERE 'id'='$id' ";
		$sql = "select * from users where id ='{$id}'";
	
		$result = $conn->query($sql); 
	
		if ($result->num_rows > 0) {        
	
			while ($row = $result->fetch_assoc()) {
	
				$name = $row['name'];
				$gender = $row['gender'];
  			    $dob = $row['dob'];
				$email = $row['email'];
				$password  = $row['password'];
				$address = $row['address'];
				$id = $row['id'];
	
			} 
?>

<html>
<head>
	<title>Edit User</title>
</head>
<body>
<h1 style="height:80px;background-color:Tomato;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
			 <script defer src="index.js"></script>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>

	<a href="userlist.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controller/userUpdate.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		
		<fieldset>
			<legend>Update Info</legend>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $password; ?>"></td>
			</tr>
            <tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td>DOB</td>
				<td><input type="date" name="dob" value="<?php echo $dob; ?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $address; ?>"></td>
			</tr>
			
			<tr>
				<td>Gender</td>
				
                <td>
				    <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male
					<input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?> >Female
					<input type="radio" name="gender" value="Others" <?php if($gender == 'Others'){ echo "checked";} ?> >Others
                </td>
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

<?php

} else{ 

	header('Location: ./index.php');

} 

}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
</head>
<body>
<h1 style="height:80px;background-color:Tomato;text-align: right; word-spacing: 15px;">
		 	<a href="index.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	
		</h1>


	<form action="../controller/loginCheck.php" method="post" enctype="">
		<a href="home.php"> Home </a>
		<fieldset>
			<legend><b>Sign In</b></legend>
			<table>
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="" value="Submit">
						<a href="signup.php"> Signup </a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="signup.html">Forget Password?</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	

</body>
</html>
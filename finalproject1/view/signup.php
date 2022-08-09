<html>
<head>
	<title>Signup</title>
</head>
<body>
<h1 style="height:80px;background-color:Tomato;text-align: right; word-spacing: 15px;">
		 	<a href="index.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		</h1>
		<form action="../controller/regCheck.php" method="post" enctype="">
			<fieldset>
				<legend>Sign Up</legend>
				<table>
                <tr>
						<td><b>Name:</b> </td>
                        </tr>
                        <tr>
						<td><input type="text" name="username" placeholder="Enter your name" value=""></td>
					</tr>

                    <tr>
						<td><b>Gender:</b></td>
                    </tr>   
					<tr>	
                    <td>
					<label for="101">  <input type="radio" name="gender" value="male" id="101"> Male</label>
                    <label for="102">  <input type="radio" name="gender" value="female" id="102"> Female</label>
					<label for="103">  <input type="radio" name="gender" value="others" id="103"> Others</label>
                    </td>
					</tr>

                    <tr>
						<td><b>DOB:</b></td>
                        </tr>
                        <tr>
						<td><input type="date" name="dob" placeholder="Date of Birth" value=""></td>
					</tr>

					<tr>
						<td><b>Email:</b></td>
                </tr>
                <tr>
						<td><input type="email" name="email" placeholder="Enter your Email" value=""></td>
					</tr>
                    
                    <tr>
						<td><b>Password</b></td>
                        </tr>
                        <tr>
						<td><input type="password" name="password" placeholder="Enter password" value=""></td>
					</tr>
                    <tr>
						<td><b>Confirm Password</b></td>
                        </tr>
                        <tr>
						<td><input type="password" name="cpassword" placeholder="Confirm Password" value=""></td>
					</tr>
					
					
					<tr>
						<td><input type="submit" name="" value=" sign Up"></td> 
                        <td> <a href="../view/login.php"> Sign In </a></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>
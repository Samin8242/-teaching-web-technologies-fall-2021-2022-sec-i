<html>
<head>
	<title>Form Submission</title>
</head>
<body>
		<form action="singupcheck1.php" method="post" enctype="">
			<fieldset>
				<legend>Sign Up</legend>
				<table>
					<tr>
						<td>username</td>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
					<td>Email: </td>
					<td> <input type="email" name="email" value="" /></td>
				</tr>
				<tr>
					<td>DoB: </td>
					<td> <input type="date" name="dob" value="" /></td>
				</tr>
				<tr>
					<td>Gender: </td>
					<td> 
						 <input type="radio" name="gender" value=""/> Male
						 <input type="radio" name="gender" value=""/> Female
						 <input type="radio" name="gender" value=""/> Other
					</td>
				</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
                    <tr>
						<td>Confirm password</td>
						<td><input type="password" name="cpassword" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>
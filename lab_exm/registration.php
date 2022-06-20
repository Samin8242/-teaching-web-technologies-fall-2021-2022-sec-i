<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    
		<form action="regCheck.php" method="post" enctype="">
			<fieldset>
				<legend>Registration</legend>
				<table>
                <tr>
						<td>Id</td>
                </tr>
                <tr>
						<td><input type="text" name="id" value=""></td>
					</tr>
                    <tr>
						<td>password</td>
                        </tr>
                        <tr>
						<td><input type="password" name="password" value=""></td>
					</tr>
                    <tr>
						<td>Confirm Password</td>
                        </tr>
                        <tr>
						<td><input type="password" name="cpassword" value=""></td>
					</tr>
					<tr>
						<td>Name</td>
                        </tr>
                        <tr>
						<td><input type="text" name="username" value=""></td>
					</tr>
					<tr>
						<td>User Type <hr></td>
                    </tr>   
					<tr>	
                    <td><label for="101">  <input type="radio" name="user" value="user" id="101"> User</label>
                    <label for="102">  <input type="radio" name="user" value="admin" id="102"> Admin</label><hr>
                    </td>
					</tr>
					<tr>
						<td><input type="submit" name="" value=" sign Up"></td> 
                        <td> <a href="login.php"> Sign In </a></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>
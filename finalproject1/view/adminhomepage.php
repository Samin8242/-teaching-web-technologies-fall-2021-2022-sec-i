<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="page_design.css">
</head>
<body>
<h1 style="height:80px;background-color:Tomato;text-align: right; word-spacing: 15px;">
		 	<a href="./index.php" style="color: white; ">Home</a>
		 	<a href="about.php" style="color: white;">About</a>
		 	<a href="contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/logout.php" style="color:white;">LogOut</a>
		</h1>
    
        <div class="sidebar">
            <div class="card">
                <form action="regCheck.php" method="post" enctype="">
                <table>
                    <tr>
                        <td><h2>Welcome Admin</h2>
                        <a href="userlist.php"> View User Information </a> <br>
                        <a href="package.php"> Package Information </a> <br>
                        <a href="advertisment.php"> Advertisment </a> <br>
                        <a href="hotelInfo.php"> Hotel Information </a><br>
                        <a href="transportInfo.php"> Transport Information </a> <br>
                        <a href="photoGallery.php"> Photo Gallery </a> <br>
                    </td>
                    </tr>
                </table>	
                </form>
            </div>
        </div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title>Update Info</title>
	<link rel="stylesheet" type="text/css" href="page_design.css">
</head>
<body>
	<div class="header">
	  <h1>Admin Homepage</h1>
	</div>

	<div class="topnav">
        <a href="./index.php" style="color: white; ">Home</a>
	    <a href="about.php" style="color: white;">About</a>
		<a href="contact.php" style="color: white;">Contact</a>
	    <a href="../Control/logout.php" style="float:right">Logout</a>
	</div>

	<div class="row">
	  <div class="column side">
	    <div class="card_side">
	    	<div class="side">
	    		<table>
	    			<tr><td><a href="userlist.php"> View User Information </a></td></tr>
	    			<tr><td><a href="package.php"> Package Information </a> </td></tr>
	    			<tr><td><a href="advertisment.php"> Advertisment </a></td></tr>
                    <tr><td><a href="hotelInfo.php"> Hotel Information </a></td></tr>
                    <tr><td><a href="transportInfo.php"> Transport Information </a> </td></tr>
                    <tr><td><<a href="photoGallery.php"> Photo Gallery </a></td></tr>
	    		</table>
	    	</div>
	    </div>
	  </div>
	  <div class="column middle">
	  	<div class="card">
	  		<form action="#" onsubmit="return validate()" method="post">
	  			<table class="table_update">
					<tr class="u_t">
						<td >Username:
							<td>
								<input type="text" id="uname" name="uname" placeholder="Enter Username">
								<br>
							</td>
						</td>
					<tr class="u_t">
						<td>Password:
							<td>
								<input type="password" id="pass" name="pass" placeholder="Enter Password">
							</td>
						</td>
					</tr>
					<tr class="u_t">
						<td>E-Mail:
							<td>
							<input type="email" id="email" name="email" placeholder="Enter E-Mail">
							</td>
						</td>
					</tr>
					<tr class="u_t">
						<td>Religion:
							<td>
								<select name="rel">
									<option value="">Please Choose Religion!</option>
									<option value="Islam">Islam</option>
									<option value="Hindu">Hindu</option>
									<option value="Christian">Chirstian</option>
									<option value="Buddha">Buddha</option>
								</select>
							</td>
						</td>
					</tr>
					<tr class="u_t">
						<td>Nationality:
							<td>
								<input type="text" id="nt" name="nt" placeholder="Enter Nationality">
							</td>
						</td>
					</tr>
					<tr class="u_t">
						<td>Address:
							<td>
								<textarea name="address" rows="3" cols="30" placeholder="Enter Address"></textarea>
							</td>
						</td>
					</tr>
					<tr class="u_t">
						<td >Gender:
							<td id="u_t">
								<input type="radio" name="gender" value="Male">Male
								<input type="radio" name="gender" value="Female">Female
								<input type="radio" name="gender" value="Other">Others
							</td>
						</td>
					</tr>
				</table>
				
				<input type="submit" class="up_btn" id="btn_up" name="btn_up" value="Update Profile">
	  		</form>
	  	</div>
	  </div>
	</div>
	<script src="../Control/updatecontrol.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
</head>
<body>
<h1 style="height:80px;background-color:Tomato;text-align: right; word-spacing: 15px;">
		 	<a href="./index.php" style="color: white; ">Home</a>
		 	<a href="about.php" style="color: white;">About</a>
		 	<a href="contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/logout.php" style="color:white;">LogOut</a>
		</h1>
    <form action="regCheck.php" method="post" enctype="">
<table border=" 1" align = "center">
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
</body>
</html>
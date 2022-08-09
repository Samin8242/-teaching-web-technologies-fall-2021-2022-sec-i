<?php 
 //include('header.php');
	require_once('../controller/header.php');
?>
<!--<!DOCTYPE html>
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
		<table border="1">
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>PASSWORD</th>
                <th>Email</th>
				<th>DOB</th>             
                <th>Gender</th>
				<th>Address</th>
				<th>ACTION</th>
			</tr>

			<?php 
			  /*$conn = mysqli_connect('localhost', 'root', '', 'tours_and_travel');
              $sql = "select * from users";
              $result = mysqli_query($conn, $sql);
     
    		while($row= mysqli_fetch_assoc($result)){
			?>
			

			<tr>
			    <th><?php echo $row['id']; ?></th>
				<th><?php echo $row['name']; ?></th>
				<th><?php echo $row['password']; ?></th>
				<th><?php echo $row['email']; ?></th>
				<th><?php echo $row['dob']; ?></th>	
				<th><?php echo $row['gender']; ?></th>
				<th><?php echo $row['address']; ?></th>
				
				<td>
					<a class="btn btn-info" href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
				    <a class="btn btn-danger" href="../controller/userDelete.php?id=<?php echo $row['id']; ?>">Delete</a>
			   </td>
			</tr>

			<?php
		}
				*/
			?>
		</table>
</body>
</html>-->

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
		  <table border="1">
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>PASSWORD</th>
                <th>Email</th>
				<th>DOB</th>             
                <th>Gender</th>
				<th>Address</th>
				<th>ACTION</th>
			</tr>

			<?php 
			  $conn = mysqli_connect('localhost', 'root', '', 'tours_and_travel');
              $sql = "select * from users";
              $result = mysqli_query($conn, $sql);
     
    		while($row= mysqli_fetch_assoc($result)){
			?>
			

			<tr>
			    <th><?php echo $row['id']; ?></th>
				<th><?php echo $row['name']; ?></th>
				<th><?php echo $row['password']; ?></th>
				<th><?php echo $row['email']; ?></th>
				<th><?php echo $row['dob']; ?></th>	
				<th><?php echo $row['gender']; ?></th>
				<th><?php echo $row['address']; ?></th>
				
				<td>
					<a class="btn btn-info" href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
				    <a class="btn btn-danger" href="../controller/userDelete.php?id=<?php echo $row['id']; ?>">Delete</a>
			   </td>
			</tr>

			<?php
		}
				
			?>
		</table>
	  	</div>
	  </div>
	</div>
	<script src="../Control/updatecontrol.js"></script>
</body>
</html>
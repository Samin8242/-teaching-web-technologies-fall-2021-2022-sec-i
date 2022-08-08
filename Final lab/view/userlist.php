<?php 
 //include('header.php');
	//require_once('../controller/header.php');
?>
<!DOCTYPE html>
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
        <h3><a href=""></a></h3>
		<table border="1">
			<tr>
				<th>Employee Name</th>
				<th>Company Nmae</th>
				<th>Contact No</th>
                <th>User Name</th>
				<th>Password</th>             
				<th>ACTION</th>
			</tr>

			<?php 
			  $conn = mysqli_connect('localhost', 'root', '', 'job');
              $sql = "select * from employee";
              $result = mysqli_query($conn, $sql);
     
    while($row= mysqli_fetch_assoc($result)){
		
    
			?>
			

			<tr>
			    <th><?php echo $row['e_name']; ?></th>
				<th><?php echo $row['c_name']; ?></th>
				<th><?php echo $row['c_no']; ?></th>
				<th><?php echo $row['username']; ?></th>
				<th><?php echo $row['password']; ?></th>	
				

				
				<td>
					<a class="btn btn-info" href="edituser.php?id=<?php echo $row['e_name']; ?>">Edit</a>&nbsp;
				    <a class="btn btn-danger" href="../controller/userDelete.php?id=<?php echo $row['e_name']; ?>">Delete</a>

			   </td>
			</tr>

			<?php
		}
				
			?>
		</table>
</body>
</html>
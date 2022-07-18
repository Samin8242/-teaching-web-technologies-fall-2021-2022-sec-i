<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User list</title>
</head>
<body>
		
		<table border="1">
			<tr>
				
				<th>NAME</th>
				<th>PASSWORD</th>
				<th>EMAIL</th>
				
			</tr>

			<?php 
				$conn = mysqli_connect('localhost', 'root', '', 'user');
              $sql = "select * from list";
              $result = mysqli_query($conn, $sql);
     
    while($row= mysqli_fetch_assoc($result)){
		
    
			?>
			<tr>
				<th><?php echo $row['Name']; ?></th>
				<th><?php echo $row['Password']; ?></th>
				<th><?php echo $row['Email']; ?></th>
				
			</tr>
			<?php
					
				}
			?>
		</table>
</body>
</html>
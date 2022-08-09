<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="height:80px;background-color:Tomato;text-align: right; word-spacing: 15px;">
		 	<a href="adminhomepage.php" style="color: white; ">Back</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
		<div id="content">
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
    <div id="display-image">
        <?php
		$conn = mysqli_connect('localhost', 'root', '', 'tours_and_travel');
        $query = " select * from pkg_img ";
        $result = mysqli_query($conn, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
            <img src="./image/<?php echo $data['filename']; ?>">
 
        <?php
        }
        ?>
    </div>


		
         <?php
		 error_reporting(0);
		 
		 $msg = "";
		 
		 // If upload button is clicked ...
		 if (isset($_POST['upload'])) {
		 
			 $filename = $_FILES["uploadfile"]["name"];
			 $tempname = $_FILES["uploadfile"]["tmp_name"];
			 $folder = "./image/" . $filename;
		 
			 $conn = mysqli_connect('localhost', 'root', '', 'tours_and_travel');
		 
			 // Get all the submitted data from the form
			 $sql = "INSERT INTO image (filename) VALUES ('$filename')";
		 
			 // Execute query
			 mysqli_query($conn, $sql);
		 
			 // Now let's move the uploaded image into the folder: image
			 if (move_uploaded_file($tempname, $folder)) {
				 echo "<h3> Image uploaded successfully!</h3>";
			 } else {
				 echo "<h3> Failed to upload image!</h3>";
			 }
		 }
		 ?>
		

		<form method="post" action="" enctype="multipart/form-data">
		Image: <input type="file" name="myfile" value="">
		<input type="submit" name="submit" value="upload">
	</form>



</body>
</html>
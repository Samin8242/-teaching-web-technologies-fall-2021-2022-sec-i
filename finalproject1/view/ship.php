<!DOCTYPE html>
<html>
<head>
	
	<title>train</title>
</head>
<body>
	<h2 align="center">MANGE SHIP TRIP</h2>

	<table align="center">
<?php

header("Content-type: text/html");

$file = fopen("../model/ship.txt","r");

?>
<table align="center" border="2px" cellpadding="2px" cellspacing="4px">

<tr>

<th>SERIAL NO</th>

<th>LEAVING FROM</th>

<th>GOING TO</th>

<th>TIME</th>

<th>DATE</th>

</tr>
<?php
$i=0;
while(($row = fgets($file)) != false) {
	 echo "<tr>";

$col = explode('|',$row);
echo "<td>". $i."</td>";
foreach($col as $data) {

echo "<td>". trim($data)."</td>";

}
echo "</tr>";
$i++;
}

?>
</table>
	<form action="addship.php" method="post" enctype="">

			<fieldset >
				<legend>ADD NEW TRIP</legend>
				<table align="center">
					<tr>
						<td>LEAVING</td>
						<td><input type="text" name="LEAVING" value=""></td>
					</tr>
					<tr>
						<td>GOING</td>
						<td><input type="text" name="GOING" value=""></td>
					</tr>
					<tr>
						<td>TIME</td>
						<td><input type="text" name="TIME" value=""></td>
					</tr>
					<tr>
						<td>DATE</td>
						<td><input type="text" name="DATE" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="ADD"></td>
					</tr>
				</table>

			</fieldset>

		</form>
		</table>

	<form action="deletship.php" method="post" enctype="">
		
			<fieldset >
				<legend> DELET TRIP</legend>
				<table align="center">
					<tr>
						<td>SERIAL</td>
						<td><input type="text"  name="SERIAL" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="DELET"></td>
					</tr>
				</table>

			</fieldset>

		</form>
		<form action="updateship.php" method="post" enctype="">
		
			<fieldset >
				<legend>UPDATE TRIP</legend>
				<table align="center">
					<tr>
						<td>SERIAL</td>
						<td><input type="text"  name="SERIAL" value=""></td>
					</tr>
					<tr>
						<td>LEAVING</td>
						<td><input type="text" name="LEAVING" value=""></td>
					</tr>
					<tr>
						<td>GOING</td>
						<td><input type="text" name="GOING" value=""></td>
					</tr>
					<tr>
						<td>TIME</td>
						<td><input type="text" name="TIME" value=""></td>
					</tr>
					<tr>
						<td>DATE</td>
						<td><input type="text" name="DATE" value=""></td>
					</tr>
					<tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="UPDATE"></td>
					</tr>
				</table>

			</fieldset>

		</form>
 <br>
 <a href="home.html"> Back to home </a>
</body>
</html>
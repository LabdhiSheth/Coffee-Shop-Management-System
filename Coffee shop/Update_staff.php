<?php

echo "
<html>
<head>
	<title>Staff</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_staff.php'>Insert</a></li>
		  <li><a href='Update_staff.php'>Update</a></li>
		  <li><a href='Delete_staff.php'>Delete</a></li>
		  <li class='b'><a href='staff.php'>Back</a></li>
		</ul>

</body>
</html>


";

echo "<h1>Update....</h1><br>";
@$connect 	= mysqli_connect("localhost","root","","Staff") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM Staff");

echo "<h3>select Staff Detail which you want to update :</h3>";
	echo "<br><form action='Update1_staff.php' method='POST'><select name='sname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dbstaffid = $row['Staff_id'];
		@$dbusername = $row['Username'];
		@$dbpassword = $row['Password'];
		@$dbphonenumber = $row['Phonenumber'];
		@$dbgender = $row['Gender'];
		echo "<option value='$dbstaffid'> $dbstaffid | $dbusername | $dbpassword | $dbphonenumber | $dbgender </option>";
	}
	echo "</select>";
	echo "<br><h3>to change Username: </h3><br><input type='text' name='Username1'>";
	echo "<br><h3>to change Password: </h3><br><input type='number' name='Password1'>";
	echo "<br><h3>to change Phonenumber: </h3><br><input type='number' name='Phonenumber1'>";
	echo "<br><h3>to change Gender : </h3><br><input type='text' name='Gender1'>";

	echo "<br><br><input type='submit' name='c' value='change'>";

	echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body background="page2.png">
	<button><a href="staff.php">Back</a></button>
</body>
</html>

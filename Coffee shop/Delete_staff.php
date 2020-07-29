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

echo "<h1>Delete....</h1><br>";

@$connect 	= mysqli_connect("localhost","root","","Staff") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM Staff");

echo "<h3>Select Product what you want to delete:</h3>";
	echo "<br><form action='Delete1_staff.php' method='POST'><select name='dname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dbstaffid= $row['Staff_id'];
		@$dbusername = $row['Username'];
		@$dbpassword = $row['Password'];
		@$dbphonenumber = $row['Phonenumber'];
		@$dbgender = $row['Gender'];

		echo "<option value='$dbstaffid'> $dbstaffid | $dbusername | $dbpassword | $dbphonenumber | $dbgender </option>";
	}
	echo "</select>";

	echo "<br><br><input type='submit' name='c' value='Delete'>";

	echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body background="page2.png">
	<button>
		<a href="staff.php">Back</a>
	</button>
</body>
</html>

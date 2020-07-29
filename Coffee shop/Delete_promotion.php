<?php

echo "
<html>
<head>
	<title>Promotion</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_promotion.php'>Insert</a></li>
		  <li><a href='Update_promotion.php'>Update</a></li>
		  <li><a href='Delete_promotion.php'>Delete</a></li>
		  <li class='b'><a href='promotion.php'>Back</a></li>
		</ul>

</body>
</html>


";
echo "<h1>Delete....</h1><br>";

@$connect 	= mysqli_connect("localhost","root","","Promotion") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM Promotion");

echo "<h3>Select Product what you want to delete:</h3>";
	echo "<br><form action='Delete1_promotion.php' method='POST'><select name='dname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dbpromotionid = $row['Promotion_id'];
		@$dbdeadline = $row['Deadline'];
		@$dbstatus = $row['Status'];
		@$dbobject = $row['Object'];

		echo "<option value='$dbpromotionid'> $dbpromotionid | $dbdeadline | $dbstatus | $dbobject </option>";
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
		<a href="promotion.php">Back</a>
	</button>
</body>
</html>

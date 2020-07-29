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
echo "<h1>Update....</h1><br>";
@$connect 	= mysqli_connect("localhost","root","","Promotion") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM Promotion");

echo "<h3>select Promotion Detail which you want to update :</h3>";
	echo "<br><form action='Update1_promotion.php' method='POST'><select name='sname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dbpromotionid = $row['Promotion_id'];
		@$dbdeadline = $row['Deadline'];
		@$dbstatus = $row['Status'];
		@$dbobject= $row['Object'];
		echo "<option value='$dbpromotionid'> $dbpromotionid | $dbdeadline | $dbstatus | $dbobject </option>";
	}
	echo "</select>";
	echo "<br><h3>to change Deadline : </h3><br><input type='date' name='Deadline1'>";
	echo "<br><h3>to change Status : </h3><br><input type='text' name='Status1'>";
	echo "<br><h3>to change Object : </h3><br><input type='text' name='Object1'>";

	echo "<br><br><input type='submit' name='c' value='change'>";

	echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body background="page2.png">
	<button><a href="promotion.php">Back</a></button>
</body>
</html>

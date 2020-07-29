<?php

echo "
<html>
<head>
	<title>Coffee shop</title>
	<link rel='stylesheet' type='text/css' href='coffeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_coffeeshop.php'>Insert</a></li>
		  <li><a href='Update_coffeeshop.php'>Update</a></li>
		  <li><a href='Delete_coffeeshop.php'>Delete</a></li>
		  <li class='b'><a href='coffeeshop.php'>Back</a></li>
		</ul>

</body>
</html>


";
echo "<h1>Update....</h1><br>";
@$connect 	= mysqli_connect("localhost","root","","CoffeeShop") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM CoffeeShop");

echo "<h3>select Shop Detail which you want to update :</h3>";
	echo "<br><form action='Update1_coffeeshop.php' method='POST'><select name='sname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dbshopid = $row['Shop_id'];
		@$dblocation = $row['Location'];
		echo "<option value='$dbshopid'> $dbshopid | $dblocation </option>";
	}
	echo "</select>";

	echo "<br><h3>to change Location : </h3><br><input type='text' name='Location1'>";

	echo "<br><br><input type='submit' name='c' value='change'>";

	echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body background="page2.png">
	<button><a href="coffeeshop.php">Back</a></button>
</body>
</html>

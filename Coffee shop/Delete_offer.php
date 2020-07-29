<?php

echo "
<html>
<head>
	<title>Offer</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_offer.php'>Insert</a></li>
		  <li><a href='Update_offer.php'>Update</a></li>
		  <li><a href='Delete_offer.php'>Delete</a></li>
		  <li class='b'><a href='offer.php'>Back</a></li>
		</ul>

</body>
</html>


";
echo "<h1>Delete....</h1><br>";

@$connect 	= mysqli_connect("localhost","root","","Offer") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM Offer");

echo "<h3>Select Product what you want to delete:</h3>";
	echo "<br><form action='Delete1_offer.php' method='POST'><select name='dname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dbofferid = $row['Offer_id'];
		@$dboffername = $row['Offer_name'];
		@$dbtimeperiod = $row['Timeperiod'];
		@$dborderid = $row['Order_id'];

		echo "<option value='$dbofferid'> $dbofferid | $dboffername | $dbtimeperiod | $dborderid </option>";
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
		<a href="offer.php">Back</a>
	</button>
</body>
</html>

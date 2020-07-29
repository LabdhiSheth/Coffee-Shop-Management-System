<?php

echo "
<html>
<head>
	<title>Customer</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body background='page2.png'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_customer.php'>Insert</a></li>
		  <li><a href='Update_customer.php'>Update</a></li>
		  <li><a href='Delete_customer.php'>Delete</a></li>
		  <li class='b'><a href='customer.php'>Back</a></li>
		</ul>

</body>
</html>


";

echo "<h1>Update....</h1><br>";
@$connect 	= mysqli_connect("localhost","root","","Customer") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM Customer");

echo "<h3>select Customer Detail which you want to update :</h3>";
	echo "<br><form action='Update1_customer.php' method='POST'><select name='sname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dbcustid = $row['Staff_id'];
		@$dbquantity = $row['Quantity'];
		@$dbofferamount = $row['Offer_amount'];
		@$dbppp = $row['PPP'];
		@$dbprice = $row['Price'];
		echo "<option value='$dbcustid'> $dbcustid | $dbquantity | $dbofferamount | $dbppp | $dbprice </option>";
	}
	echo "</select>";
	echo "<br><h3>to change Quantity: </h3><br><input type='text' name='Quantity1'>";
	echo "<br><h3>to change Offer_amount: </h3><br><input type='number' name='Offer_amount1'>";
	echo "<br><h3>to change PPP: </h3><br><input type='number' name='PPP1'>";
	echo "<br><h3>to change Price : </h3><br><input type='text' name='Price1'>";

	echo "<br><br><input type='submit' name='c' value='change'>";

	echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body background="page2.png">
	<button><a href="customer.php">Back</a></button>
</body>
</html>

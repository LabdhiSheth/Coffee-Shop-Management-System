<?php

echo "
<html>
<head>
	<title>Payment</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_payment.php'>Insert</a></li>
		  <li><a href='Update_payment.php'>Update</a></li>
		  <li><a href='Delete_payment.php'>Delete</a></li>
		  <li class='b'><a href='payment.php'>Back</a></li>
		</ul>

</body>
</html>


";
echo "<h1>Update....</h1><br>";
@$connect 	= mysqli_connect("localhost","root","","Payment") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM Payment");

echo "<h3>select Payment Detail which you want to update :</h3>";
	echo "<br><form action='Update1_payment.php' method='POST'><select name='sname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dbpaymentid = $row['Payment_id'];
		@$dbpaymentmethod = $row['Payment_method'];
		echo "<option value='$dbpaymentid'> $dbpaymentid | $dbpaymentmethod  </option>";
	}
	echo "</select>";
	echo "<br><h3>to change Payment_method : </h3><br><input type='text' name='Payment_method1'>";

	echo "<br><br><input type='submit' name='c' value='change'>";

	echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body background="page2.png">
	<button><a href="payment.php">Back</a></button>
</body>
</html>

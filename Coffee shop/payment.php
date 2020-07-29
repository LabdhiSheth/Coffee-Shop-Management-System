<?php

session_start();

echo "<h1>Welcome  , ".@$_SESSION['username']."</h1>";
@$connect 	= mysqli_connect("localhost","root","","Payment") or die("couldn't connect!");
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
		  <li class='b'><a href='login.php'>Back</a></li>
		</ul>

</body>
</html>


";
@$query1     = mysqli_query($connect,"SELECT * FROM Payment");

	echo "<h3><table>";
	echo "<tr>
			<td>
			 Payment_id
			</td>
			<td>
				Payment_method
			</td>
	</tr>";
	while (@$row = mysqli_fetch_assoc(@$query1))
	{

		@$dbpaymentid = $row['Payment_id'];
		@$dbpaymentmethod = $row['Payment_method'];
		echo "

		<tr>
			<td>
				$dbpaymentid
			</td>
			<td>
				$dbpaymentmethod
			</td>
		</tr>

		";
	}
	echo "</table></h3>";
?>

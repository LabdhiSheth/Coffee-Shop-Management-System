<?php

session_start();

echo "<h1>Welcome  , ".@$_SESSION['username']."</h1>";
@$connect 	= mysqli_connect("localhost","root","","Offer") or die("couldn't connect!");
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
		  <li class='b'><a href='login.php'>Back</a></li>
		</ul>

</body>
</html>


";
@$query1     = mysqli_query($connect,"SELECT * FROM Offer");

	echo "<h3><table>";
	echo "<tr>
			<td>
			 Offer_id
			</td>
			<td>
				Offer_name
			</td>
      <td>
				Timeperiod
			</td>
      <td>
				Order_id
			</td>

	</tr>";
	while (@$row = mysqli_fetch_assoc(@$query1))
	{

		@$dbofferid = $row['Offer_id'];
		@$dboffername = $row['Offer_name'];
    @$dbtimeperiod = $row['Timeperiod'];
    @$dborderid = $row['Order_id'];
		echo "

		<tr>
			<td>
				$dbofferid
			</td>
			<td>
				$dboffername
			</td>
      <td>
				$dbtimeperiod
			</td>
      <td>
				$dborderid
			</td>
		</tr>

		";
	}
	echo "</table></h3>";
?>

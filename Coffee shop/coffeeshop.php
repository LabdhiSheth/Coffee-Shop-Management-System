<?php

session_start();

echo "<h1>Welcome  , ".@$_SESSION['username']."</h1>";
@$connect 	= mysqli_connect("localhost","root","","CoffeeShop") or die("couldn't connect!");
echo "
<html>
<head>
	<title>Coffee Shop</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_coffeeshop.php'>Insert</a></li>
		  <li><a href='Update_coffeeshop.php'>Update</a></li>
		  <li><a href='Delete_coffeeshop.php'>Delete</a></li>
		  <li class='b'><a href='login.php'>Back</a></li>
		</ul>

</body>
</html>


";
@$query1     = mysqli_query($connect,"SELECT * FROM CoffeeShop");

	echo "<h3><table>";
	echo "<tr>
			<td>
			 Shop_id
			</td>
			<td>
				Location
			</td>
	</tr>";
	while (@$row = mysqli_fetch_assoc(@$query1))
	{

		@$dbshopid = $row['Shop_id'];
		@$dblocation = $row['Location'];
		echo "

		<tr>
			<td>
				$dbshopid
			</td>
			<td>
				$dblocation
			</td>
		</tr>

		";
	}
	echo "</table></h3>";
?>

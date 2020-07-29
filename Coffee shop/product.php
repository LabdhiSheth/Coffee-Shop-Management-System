<?php

session_start();

echo "<h1>Welcome  , ".@$_SESSION['username']."</h1>";
@$connect 	= mysqli_connect("localhost","root","","Product") or die("couldn't connect!");
echo "
<html>
<head>
	<title>Product</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_product.php'>Insert</a></li>
		  <li><a href='Update_product.php'>Update</a></li>
		  <li><a href='Delete_product.php'>Delete</a></li>
		  <li class='b'><a href='login.php'>Back</a></li>
		</ul>

</body>
</html>


";
@$query1     = mysqli_query($connect,"SELECT * FROM Product");

	echo "<h3><table>";
	echo "<tr>
			<td>
			 Product_id
			</td>
			<td>
			name
			</td>
      <td>
			type
			</td>
      <td>
			price
			</td>

	</tr>";
	while (@$row = mysqli_fetch_assoc(@$query1))
	{

		@$dbproductid = $row['Product_id'];
		@$dbname = $row['name'];
    @$dbtype = $row['type'];
    @$dbprice = $row['price'];
		echo "

		<tr>
			<td>
				$dbproductid
			</td>
			<td>
				$dbname
			</td>
      <td>
				$dbtype
			</td>
      <td>
				$dbprice
			</td>
		</tr>

		";
	}
	echo "</table></h3>";
?>

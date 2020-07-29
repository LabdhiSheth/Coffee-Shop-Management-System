<?php

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
		  <li class='b'><a href='product.php'>Back</a></li>
		</ul>

</body>
</html>


";

echo "<h1>Delete....</h1><br>";

@$connect 	= mysqli_connect("localhost","root","","Product") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM Product");

echo "<h3>Select Product what you want to delete:</h3>";
	echo "<br><form action='Delete1_product.php' method='POST'><select name='dname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dbproductid = $row['Product_id'];
		@$dbname = $row['name'];
		@$dbtype = $row['type'];
		@$dbprice = $row['price'];

		echo "<option value='$dbproductid'> $dbproductid | $dbname | $dbtype | $dbprice </option>";
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
		<a href="product.php">Back</a>
	</button>
</body>
</html>

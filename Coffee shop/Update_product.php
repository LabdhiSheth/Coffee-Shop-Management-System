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
echo "<h1>Update....</h1><br>";
@$connect 	= mysqli_connect("localhost","root","","Product") or die("couldn't connect!");


@$query2     = mysqli_query($connect,"SELECT * FROM Product");

echo "<h3>select Product Detail which you want to update :</h3>";
	echo "<br><form action='Update1_product.php' method='POST'><select name='sname'>";


	while (@$row = mysqli_fetch_assoc(@$query2))
	{
		@$dbproductid = $row['Product_id'];
		@$dbname = $row['name'];
		@$dbtype = $row['type'];
		@$dbprice = $row['price'];
		echo "<option value='$dbproductid'> $dbproductid | $dbname | $dbtype | $dbprice </option>";
	}
	echo "</select>";
	echo "<br><h3>to change name : </h3><br><input type='text' name='name1'>";
	echo "<br><h3>to change type : </h3><br><input type='text' name='type1'>";
	echo "<br><h3>to change price : </h3><br><input type='number' name='price1'>";

	echo "<br><br><input type='submit' name='c' value='change'>";

	echo "</form>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body background="page2.png">
	<button><a href="product.php">Back</a></button>
</body>
</html>

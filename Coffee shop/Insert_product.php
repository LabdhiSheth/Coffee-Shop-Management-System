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

	echo "<h1>Insert..</h1>";


	@$submit = $_POST['submit'];
	@$Product_id = $_POST['Product_id'];
	@$name = $_POST['name'];
	@$type = $_POST['type'];
	@$price = $_POST['price'];

	if($submit)
	{
		@$connect 	= mysqli_connect("localhost","root","","Product") or die("couldn't connect!");
		@$namecheck = mysqli_query($connect,"SELECT Product_id FROM Product WHERE Product_id='$Product_id'");
		@$count = mysqli_num_rows($namecheck);
		if ($count ==0)
		{
			if($Product_id && $name && $type && $price)
			{
					@$query = mysqli_query($connect,"
							INSERT INTO `Product` (`Product_id`, `name`, `type`, `price`) VALUES ('$Product_id', '$name', '$type', '$price')
								");

					echo "<h3>you successfully enter a data</h3>";
			}
			else
			{
					die("fill all fields");
			}
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>InsertPage</title>
</head>
<body background="page2.png">
	<br><br><br><br>
	<h3>
	<form action="Insert_product.php" method="POST">
			Product_id :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="Product_id">
			<br><br>
			name :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="name">
			<br><br>
			type :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
			<input type="text" name="type">
			<br><br>
			price :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="price">
			<br><br>
			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="submit" name="submit">&emsp;&emsp;
			<button><a href="order.php">Back</a></button>
	</form>
</h3>
</body>
</html>

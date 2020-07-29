<?php

echo "
<html>
<head>
	<title>Coffee shop</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_coffeeshop.php'>Insert</a></li>
		  <li><a href='Update_coffeeshop.php'>Update</a></li>
		  <li><a href='Delete_coffeeshop.php'>Delete</a></li>
		  <li class='b'><a href='coffeeshop.php'>Back</a></li>
		</ul>

</body>
</html>


";

	echo "<h1>Insert..</h1>";


	@$submit = $_POST['submit'];
	@$Shop_id = $_POST['Shop_id'];
	@$Location = $_POST['Location'];

	if($submit)
	{
		@$connect 	= mysqli_connect("localhost","root","","CoffeeShop") or die("couldn't connect!");
		@$namecheck = mysqli_query($connect,"SELECT Shop_id FROM CoffeeShop WHERE Shop_id='$Shop_id'");
		@$count = mysqli_num_rows($namecheck);
		if ($count ==0)
		{
			if($Shop_id && $Location )
			{
					@$query = mysqli_query($connect,"
							INSERT INTO `CoffeeShop` (`Shop_id`, `Location`) VALUES ('$Shop_id', '$Location')
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
	<form action="Insert_coffeeshop.php" method="POST">
			Shop_id :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="Shop_id">
			<br><br>
			Location :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="Location">
			<br><br>
			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="submit" name="submit">&emsp;&emsp;
			<button><a href="coffeeshop.php">Back</a></button>
	</form>
</h3>
</body>
</html>

<?php

echo "
<html>
<head>
	<title>Coffee shop</title>
	<link rel='stylesheet' type='text/css' href='coffeshopcss.css'>
</head>
<body background='page2.png'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert.php'>Insert</a></li>
		  <li><a href='Update.php'>Update</a></li>
		  <li><a href='Delete.php'>Delete</a></li>
		  <li class='b'><a href='coffeshop.php'>Back</a></li>
		</ul>

</body>
</html>


";

	echo "<h1>Insert..</h1>";


	@$submit = $_POST['submit'];
	@$pid = $_POST['Shop_id'];
	@$pname = $_POST['Location'];

	if($submit)
	{
		@$connect 	= mysqli_connect("localhost","root","","phplogin1") or die("couldn't connect!");
		@$namecheck = mysqli_query($connect,"SELECT Shop_id FROM CoffeShop WHERE Shop_id='$Shop_id'");
		@$count = mysqli_num_rows($namecheck);
		if ($count ==0)
		{
			if($Shop_id && $Location )
			{
					@$query = mysqli_query($connect,"
							INSERT INTO `CoffeShop` (`Shop_id`, `Location`) VALUES ('$Shop_id', '$Location')
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
	<form action="Insert.php" method="POST">
			Shop_id :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="Shop_id">
			<br><br>
			Location :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="Location">
			<br><br>
			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="submit" name="submit">&emsp;&emsp;
			<button><a href="coffeshop.php">Back</a></button>
	</form>
</h3>
</body>
</html>

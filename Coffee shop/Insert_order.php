<?php

echo "
<html>
<head>
	<title>Order</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_order.php'>Insert</a></li>
		  <li><a href='Update_order.php'>Update</a></li>
		  <li><a href='Delete_order.php'>Delete</a></li>
		  <li class='b'><a href='order.php'>Back</a></li>
		</ul>

</body>
</html>


";

	echo "<h1>Insert..</h1>";


	@$submit = $_POST['submit'];
	@$Order_id = $_POST['Order_id'];
	@$Status = $_POST['Status'];
	@$Payment_id = $_POST['Payment_id'];
	@$quantity = $_POST['quantity'];

	if($submit)
	{
		@$connect 	= mysqli_connect("localhost","root","","Order") or die("couldn't connect!");
		@$namecheck = mysqli_query($connect,"SELECT Order_id FROM Order WHERE Order_id='$Order_id'");
		@$count = mysqli_num_rows($namecheck);
		if ($count ==0)
		{
			if($Order_id && $Status && $Payment_id && $quantity)
			{
					@$query = mysqli_query($connect,"
							INSERT INTO `Order` (`Order_id`, `Status`, `Payment_id`, `quantity`) VALUES ('$Order_id', '$Status', '$Payment_id', '$quantity')
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
	<form action="Insert_order.php" method="POST">
			Order_id :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="Order_id">
			<br><br>
			Status :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="Status">
			<br><br>
			Payment_id :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
			<input type="number" name="Payment_id">
			<br><br>
			quantity :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="quantity">
			<br><br>
			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="submit" name="submit">&emsp;&emsp;
			<button><a href="order.php">Back</a></button>
	</form>
</h3>
</body>
</html>

<?php

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
		  <li class='b'><a href='payment.php'>Back</a></li>
		</ul>

</body>
</html>


";

	echo "<h1>Insert..</h1>";


	@$submit = $_POST['submit'];
	@$Payment_id = $_POST['Payment_id'];
	@$Payment_method = $_POST['Payment_method'];

	if($submit)
	{
		@$connect 	= mysqli_connect("localhost","root","","Payment") or die("couldn't connect!");
		@$namecheck = mysqli_query($connect,"SELECT Payment_id FROM Payment WHERE Payment_id='$Payment_id'");
		@$count = mysqli_num_rows($namecheck);
		if ($count ==0)
		{
			if($Payment_id && $Payment_method )
			{
					@$query = mysqli_query($connect,"
							INSERT INTO `Payment` (`Payment_id`, `Payment_method`) VALUES ('$Payment_id', '$Payment_method')
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
	<form action="Insert_payment.php" method="POST">
			Payment_id :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="Payment_id">
			<br><br>
			Payment_method:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="Payment_method">
			<br><br>
			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="submit" name="submit">&emsp;&emsp;
			<button><a href="payment.php">Back</a></button>
	</form>
</h3>
</body>
</html>

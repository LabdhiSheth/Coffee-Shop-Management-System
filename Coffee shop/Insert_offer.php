<?php

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
		  <li class='b'><a href='offer.php'>Back</a></li>
		</ul>

</body>
</html>


";

	echo "<h1>Insert..</h1>";


	@$submit = $_POST['submit'];
	@$Offer_id = $_POST['Offer_id'];
	@$Offer_name = $_POST['Offer_name'];
	@$Timeperiod = $_POST['Timeperiod'];
	@$Order_id = $_POST['Order_id'];

	if($submit)
	{
		@$connect 	= mysqli_connect("localhost","root","","Offer") or die("couldn't connect!");
		@$namecheck = mysqli_query($connect,"SELECT Offer_id FROM Offer WHERE Offer_id='$Offer_id'");
		@$count = mysqli_num_rows($namecheck);
		if ($count ==0)
		{
			if($Offer_id && $Offer_name && $Timeperiod && $Order_id)
			{
					@$query = mysqli_query($connect,"
							INSERT INTO `Offer` (`Offer_id`, `Offer_name`, `Timeperiod`, `Order_id`) VALUES ('$Offer_id', '$Offer_name', '$Timeperiod', '$Order_id')
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
	<form action="Insert_offer.php" method="POST">
			Offer_id :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="Offer_id">
			<br><br>
			Offer_name :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="Offer_name">
			<br><br>
			Timeperiod :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
			<input type="text" name="Timeperiod">
			<br><br>
			Order_id :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="Order_id">
			<br><br>

			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="submit" name="submit">&emsp;&emsp;
			<button><a href="offer.php">Back</a></button>
	</form>
</h3>
</body>
</html>

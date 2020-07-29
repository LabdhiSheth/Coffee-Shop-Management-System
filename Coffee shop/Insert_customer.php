<?php

echo "
<html>
<head>
	<title>Customer</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body background='page2.png'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_customer.php'>Insert</a></li>
		  <li><a href='Update_customer.php'>Update</a></li>
		  <li><a href='Delete_customer.php'>Delete</a></li>
		  <li class='b'><a href='customer.php'>Back</a></li>
		</ul>

</body>
</html>


";

	echo "<h1>Insert..</h1>";


	@$submit = $_POST['submit'];
	@$Cust_id = $_POST['Cust_id'];
	@$Quantity = $_POST['Quantity'];
	@$Offer_amount= $_POST['Offer_amount'];
	@$PPP = $_POST['PPP'];
	@$Price = $_POST['Price'];

	if($submit)
	{
		@$connect 	= mysqli_connect("localhost","root","","Customer") or die("couldn't connect!");
		@$namecheck = mysqli_query($connect,"SELECT Cust_id FROM Customer WHERE Cust_id='$Cust_id'");
		@$count = mysqli_num_rows($namecheck);
		if ($count ==0)
		{
			if($Cust_id && $Quantity && $Offer_amount &&  $PPP && $Price  )
			{
					@$query = mysqli_query($connect,"
							INSERT INTO `Customer` (`Cust_id`, `Quantity`,`Offer_amount`,`PPP`,`Price`) VALUES ('$Cust_id', '$Quantity','$Offer_amount','$PPP','$Price')
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
	<form action="Insert_staff.php" method="POST">
			Staff_id :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="Staff_id">
			<br><br>
			Username:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="Username">
			<br><br>
			Password:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="password" name="Password">
			<br><br>
			Phonenumber:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="Phonenumber">
			<br><br>
			Gender:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="Gender">
			<br><br>
			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="submit" name="submit">&emsp;&emsp;
			<button><a href="staff.php">Back</a></button>
	</form>
</h3>
</body>
</html>

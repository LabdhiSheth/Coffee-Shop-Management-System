<?php

echo "
<html>
<head>
	<title>Promotion</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_promotion.php'>Insert</a></li>
		  <li><a href='Update_promotion.php'>Update</a></li>
		  <li><a href='Delete_promotion.php'>Delete</a></li>
		  <li class='b'><a href='promotion.php'>Back</a></li>
		</ul>

</body>
</html>


";

	echo "<h1>Insert..</h1>";


	@$submit = $_POST['submit'];
	@$Promotion_id = $_POST['Promotion_id'];
	@$Deadline = $_POST['Deadline'];
	@$Status = $_POST['Status'];
	@$Object = $_POST['Object'];

	if($submit)
	{
		@$connect 	= mysqli_connect("localhost","root","","Promotion") or die("couldn't connect!");
		@$namecheck = mysqli_query($connect,"SELECT Promotion_id FROM Promotion WHERE Promotion_id='$Promotion_id'");
		@$count = mysqli_num_rows($namecheck);
		if ($count ==0)
		{
			if($Promotion_id && $Deadline && $Status && $Object)
			{
					@$query = mysqli_query($connect,"
							INSERT INTO `Promotion` (`Promotion_id`, `Deadline`, `Status`, `Object`) VALUES ('$Promotion_id', '$Deadline', '$Status', '$Object')
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
	<form action="Insert_promotion.php" method="POST">
			Promotion_id :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="number" name="Promotion_id">
			<br><br>
			Deadline :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="date" name="Deadline">
			<br><br>
			Status:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
			<input type="text" name="Status">
			<br><br>
			Object :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="text" name="Object">
			<br><br>

			<br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			<input type="submit" name="submit">&emsp;&emsp;
			<button><a href="offer.php">Back</a></button>
	</form>
</h3>
</body>
</html>

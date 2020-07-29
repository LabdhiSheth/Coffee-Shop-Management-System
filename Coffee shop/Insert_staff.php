<?php

echo "
<html>
<head>
	<title>Staff</title>
	<link rel='stylesheet' type='text/css' href='coffeeshopcss.css'>
</head>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
	<br><br><br><br><br><br>
		<ul>
		  <li><a href='Insert_staff.php'>Insert</a></li>
		  <li><a href='Update_staff.php'>Update</a></li>
		  <li><a href='Delete_staff.php'>Delete</a></li>
		  <li class='b'><a href='staff.php'>Back</a></li>
		</ul>

</body>
</html>


";

	echo "<h1>Insert..</h1>";


	@$submit = $_POST['submit'];
	@$Staff_id = $_POST['Staff_id'];
	@$Username = $_POST['Username'];
	@$Password = $_POST['Password'];
	@$Phonenumber = $_POST['Phonenumber'];
	@$Gender = $_POST['Gender'];

	if($submit)
	{
		@$connect 	= mysqli_connect("localhost","root","","staff") or die("couldn't connect!");
		@$namecheck = mysqli_query($connect,"SELECT Staff_id FROM staff WHERE Staff_id='$Staff_id'");
		@$count = mysqli_num_rows($namecheck);
		if ($count ==0)
		{
			if($Staff_id && $Username && $Password &&  $Phonenumber && $Gender  )
			{
					@$query = mysqli_query($connect,"
							INSERT INTO `staff` (`Staff_id`, `Username`,`Password`,`Phonenumber`,`Gender`) VALUES ('$Staff_id', '$Username','$Password','$Phonenumber','$Gender')
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

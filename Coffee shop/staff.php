<?php

session_start();

echo "<h1>Welcome  , ".@$_SESSION['username']."</h1>";
@$connect 	= mysqli_connect("localhost","root","","staff") or die("couldn't connect!");
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
		  <li class='b'><a href='login.php'>Back</a></li>
		</ul>

</body>
</html>


";
@$query1 = mysqli_query($connect,"SELECT * FROM `staff`");

	echo "<h3><table>";
	echo "<tr>
			<td>
			 Staff_id
			</td>
			<td>
		   Username
			</td>
      <td>
			 Password
			</td>
      <td>
			 Phonenumber
			</td>
      <td>
		   Gender
			</td>

	</tr>";
	while (@$row = mysqli_fetch_assoc(@$query1))
	{

		@$dbstaffid = $row['Staff_id'];
		@$dbusername = $row['Username'];
    @$dbpassword = $row['Password'];
    @$dbphonenumber = $row['Phonenumber'];
    @$dbgender = $row['Gender'];
		echo "

		<tr>
			<td>
				$dbstaffid
			</td>
			<td>
				$dbusername
			</td>
      <td>
				$dbpassword
			</td>
			<td>
				$dbphonenumber
			</td>
      <td>
				$dbgender
			</td>
		</tr>

		";
	}
	echo "</table></h3>";
?>

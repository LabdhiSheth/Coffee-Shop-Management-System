<?php

session_start();

echo "<h1>Welcome  , ".@$_SESSION['username']."</h1>";
@$connect 	= mysqli_connect("localhost","root","","Promotion") or die("couldn't connect!");
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
		  <li class='b'><a href='login.php'>Back</a></li>
		</ul>

</body>
</html>


";
@$query1     = mysqli_query($connect,"SELECT * FROM Promotion");

	echo "<h3><table>";
	echo "<tr>
			<td>
			 Promotion_id
			</td>
			<td>
			Deadline
			</td>
      <td>
			Status
			</td>
      <td>
			Object
			</td>

	</tr>";
	while (@$row = mysqli_fetch_assoc(@$query1))
	{

		@$dbpromotionid = $row['Promotion_id'];
		@$dbdeadline = $row['Deadline'];
    @$dbstatus = $row['Status'];
    @$dbobject = $row['Object'];
		echo "

		<tr>
			<td>
				$dbpromotionid
			</td>
			<td>
				$dbdeadline
			</td>
      <td>
				$dbstatus
			</td>
      <td>
				$dbobject
			</td>
		</tr>

		";
	}
	echo "</table></h3>";
?>

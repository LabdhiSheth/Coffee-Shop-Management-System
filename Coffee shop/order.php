<?php

session_start();

echo "<h1>Welcome  , ".@$_SESSION['username']."</h1>";
@$connect 	= mysqli_connect("localhost","root","","Order") or die("couldn't connect!");
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
		  <li class='b'><a href='login.php'>Back</a></li>
		</ul>

</body>
</html>


";
@$query1     = mysqli_query($connect,"SELECT * FROM `Order`");

	echo "<h3><table>";
	echo "<tr>
			<td>
			  Order_id
			</td>
			<td>
			  Status
			</td>
      <td>
			  Payment_id
			</td>
      <td>
			  quantity
			</td>

	</tr>";
	while (@$row = mysqli_fetch_assoc(@$query1))
	{

		@$dborderid = $row['Order_id'];
		@$dbstatus = $row['Status'];
    @$dbpaymentid = $row['Payment_id'];
    @$dbquantity = $row['quantity'];
		echo "

		<tr>
			<td>
				$dborderid
			</td>
			<td>
				$dbstatus
			</td>
      <td>
				$dbpaymentid
			</td>
      <td>
				$dbquantity
			</td>
		</tr>

		";
	}
	echo "</table></h3>";
?>

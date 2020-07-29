<!DOCTYPE html>
<html>
	<title>2nd page</title>
	<link rel="stylesheet" type="text/css" href="logincss.css">
<?php

session_start();

@$submit = $_POST['submit'];
@$username = $_POST['username'];
@$password = $_POST['password'];

if($submit)
{

if( @$username && @$password)
{

	@$connect 	= mysqli_connect("localhost","root","","users1") or die("couldn't connect!");
	@$query     = mysqli_query($connect,"SELECT * FROM users1 WHERE Username='$username'");
	@$numrows = mysqli_num_rows($query);

	if(@$numrows != 0)
	{
		while (@$row = mysqli_fetch_assoc(@$query)) {
			@$dbusername = $row['Username'];
			@$dbpassword = $row['Password'];
		}
		if (@$dbusername==@$username && @$dbpassword==@$password) {

			$_SESSION['username']=$dbusername;
		}
		else
			echo "incorrect";
	}
	else
	{
		echo "the user doesn't exist <button><a href='index.php'>Back</a></button>";

	die();
	}

}
else

	die("please enter a username and password");

}
?>
<body style="background-image:url(123.jpg);background-repeat: no-repeat;background-size:cover;">
	<br><br><br><br><br><br>
		<ul>
		  <li><a href="coffeeshop.php">coffeeshop</a></li>
      <li><a href="order.php">order</a></li>
      <li><a href="payment.php">payment</a></li>
      <li><a href="offer.php">offer</a></li>
      <li><a href="product.php">product</a></li>
      <li><a href="promotion.php">promotion</a></li>
      <li><a href="staff.php">staff</a></li>
		  <li><a href="Data.php">Customer</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li class="b"><a href="index.php">logout</a></li>
		</ul>
		<center>
			<table>
			<tr class = "c">
				<td>Welcome to our coffee shop</td>
			</tr>
			<tr>
				<td style="font-size: 200%;color: #F9E79F;" align="center"><br>We belive that a Cup of coffee is<br> one of the most important,<br> simple pleasures in life</td>
			</tr>
			<tr>
				<td style="font-size: 200%;color: #F9E79F;" align="center"><br>Coffee is important to us, but so is the health and <br>wellbeing of our customers. Whether it's checking <br>ingredients for allergens or simply making your <br>latte lighter, we've got your cravings covered.</td>
			</tr>
		</table>
		</center>


</body>
</html>

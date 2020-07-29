</<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
	<link rel="stylesheet" type="text/css" href="Data.css">
</head>

<body style="background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;">
	<br><br><br><br><br><br>
  <ul>
    <li><a href="coffeshop.php">coffeshop</a></li>
    <li><a href="order.php">order</a></li>
    <li><a href="payment.php">payment</a></li>
    <li><a href="offer.php">offer</a></li>
    <li><a href="product.php">product</a></li>
    <li><a href="promotion.php">promotion</a></li>
    <li><a href="staff.php">staff</a></li>
    <li><a href="Data.php">Customer</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li class="b"><a href="login.php">logout</a></li>
  </ul>

</body>
</html>
<?php
@$qty = $_POST['qty'];

echo "

	<form action='Data.php' method='POST'>
		<h3>
			<br><br>
			How many products you want to buy ? :&emsp;&emsp;
			<input type='number' name='qty'>
			<br><br>
			<input type='submit' name='submit2' value='go'>
			<br><br>

		</h3>
	</form>

";
@$go = $_POST['submit2'];
if($go)
{
		for ($i=1; $i <= $qty ; $i++)
		{
		echo "
			<form action='Data1.php' method='POST'>
				<h3>
					<br><br>
					Cust_id :&emsp;&emsp;
					<input type='text' name='Cust_id'>
					<br><br>
					Quantity :&emsp;&emsp;
					<input type='number' name='qty1'>
					<br><br>
					Offer_amount :&emsp;&emsp;
					<input type='number' name='Offer_amount'>
					<br><br>
					PPP :&emsp;&emsp;
					<input type='number' name='PPP'>
					<br><br>
				</h3>
			</form>

		";
		}
}
echo "

	<form action='Data1.php' method='POST'>
		<h3>
			<br><br>
			<input type='submit' name='submit1' value='ADD'>
			<br><br>
			<br><br>
			<input type='submit' name='submit' value='All Records'>
		</h3>
	</form>

";


?>

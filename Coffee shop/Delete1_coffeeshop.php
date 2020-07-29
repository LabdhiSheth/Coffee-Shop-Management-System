<?php

	@$connect 	= mysqli_connect("localhost","root","","CoffeeShop") or die("couldn't connect!");
	@$dname = $_POST['dname'];

	$delete = mysqli_query($connect,"DELETE FROM CoffeeShop WHERE Shop_id='$dname'");
	echo "Successfully Deleted .......";
	echo "
	<html>
		<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
		<button><a href='coffeeshop.php'>Back</a></button>
		</body>
	</html>

	";
?>

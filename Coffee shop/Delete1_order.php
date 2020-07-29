<?php

	@$connect 	= mysqli_connect("localhost","root","","Order") or die("couldn't connect!");
	@$dname = $_POST['dname'];

	$delete = mysqli_query($connect,"DELETE FROM Order WHERE Order_id='$dname'");
	echo "Successfully Deleted .......";
	echo "
	<html>
		<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
		<button><a href='order.php'>Back</a></button>
		</body>
	</html>

	";
?>

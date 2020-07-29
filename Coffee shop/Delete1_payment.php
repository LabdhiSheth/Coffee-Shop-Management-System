<?php

	@$connect 	= mysqli_connect("localhost","root","","Payment") or die("couldn't connect!");
	@$dname = $_POST['dname'];

	$delete = mysqli_query($connect,"DELETE FROM Payment WHERE Payment_id='$dname'");
	echo "Successfully Deleted .......";
	echo "
	<html>
		<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
		<button><a href='payment.php'>Back</a></button>
		</body>
	</html>

	";
?>

<?php

	@$connect 	= mysqli_connect("localhost","root","","Staff") or die("couldn't connect!");
	@$dname = $_POST['dname'];

	$delete = mysqli_query($connect,"DELETE FROM Staff WHERE Staff_id='$dname'");
	echo "Successfully Deleted .......";
	echo "
	<html>
		<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>
		<button><a href='staff.php'>Back</a></button>
		</body>
	</html>

	";
?>

<?php

echo "<html>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>

</body>
</html>";
	@$connect 	= mysqli_connect("localhost","root","","Payment") or die("couldn't connect!");
	@$sname = $_POST['sname'];
	@$payment_method1 = $_POST['$payment_method1'];

	if($sname && $payment_method1)
	{
		$change = mysqli_query($connect , "UPDATE `Payment` SET `Payment_method`='$payment_method1' WHERE `Payment_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='payment.php'>Back</a></button>";
	}


?>

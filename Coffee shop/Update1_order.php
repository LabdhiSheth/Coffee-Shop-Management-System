<?php

echo "<html>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>

</body>
</html>";
	@$connect 	= mysqli_connect("localhost","root","","Order") or die("couldn't connect!");
	@$sname = $_POST['sname'];
	@$Order_id1 = $_POST['$Order_id1'];
	@$Status1 = $_POST['$Status1'];
	@$Payment_id1 = $_POST['$Payment_id1'];
	@$quantity1 = $_POST['$quantity1'];

	if($sname && $Status1)
	{
		$change = mysqli_query($connect , "UPDATE `Order` SET `Status`='$Status1' WHERE `Order_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='order.php'>Back</a></button>";
	}
	if($sname && $Payment_id1)
	{
		$change = mysqli_query($connect , "UPDATE `Order` SET `Payment_id`='$Payment_id1' WHERE `Order_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='order.php'>Back</a></button>";
	}
	if($sname && $quantity1)
	{
		$change = mysqli_query($connect , "UPDATE `Order` SET `quantity`='$quantity1' WHERE `Order_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='order.php'>Back</a></button>";
	}

?>

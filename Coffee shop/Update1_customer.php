<?php

echo "<html>
<body background='page2.png'>

</body>
</html>";
	@$connect 	= mysqli_connect("localhost","root","","Staff") or die("couldn't connect!");
	@$sname = $_POST['sname'];
	@$Quantity1 = $_POST['Quantity1'];
	@$Offer_amount1= $_POST['Offer_amount1'];
	@$PPP1 = $_POST['PPP1'];
	@$Price1 = $_POST['Price1'];

	if($sname && $Quantity1)
	{
		$change = mysqli_query($connect , "UPDATE `Customer` SET `Quantity`='$Quantity1' WHERE `Cust_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='staff.php'>Back</a></button>";
	}
	if($sname && $Offer_amount1)
	{
		$change = mysqli_query($connect , "UPDATE `Customer` SET `Offer_amount`='$Offer_amount1' WHERE `Cust_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='staff.php'>Back</a></button>";
	}
	if($sname && $PPP1)
	{
		$change = mysqli_query($connect , "UPDATE `Customer` SET `PPP`='$PPP1' WHERE `Cust_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='staff.php'>Back</a></button>";
	}
	if($sname && $Price1)
	{
		$change = mysqli_query($connect , "UPDATE `Customer` SET `Price`='$Price1' WHERE `Cust_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='customer.php'>Back</a></button>";
	}

?>

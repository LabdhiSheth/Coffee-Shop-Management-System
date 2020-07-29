<?php

echo "<html>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>

</body>
</html>";
	@$connect 	= mysqli_connect("localhost","root","","Offer") or die("couldn't connect!");
	@$sname = $_POST['sname'];
	@$Offer_id1 = $_POST['$Offer_id1'];
	@$Offer_name1 = $_POST['$Offer_name1'];
	@$Timeperiod1 = $_POST['$Timeperiod1'];
	@$Order_id1 = $_POST['$Order_id1'];

	if($sname && $Offer_name1)
	{
		$change = mysqli_query($connect , "UPDATE `Offer` SET `Offer_name`='$Offer_name1' WHERE `Offer_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='offer.php'>Back</a></button>";
	}
	if($sname && $Timeperiod1)
	{
		$change = mysqli_query($connect , "UPDATE `Offer` SET `Timeperiod`='$Timeperiod1' WHERE `Offer_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='offer.php'>Back</a></button>";
	}
	if($sname && $Order_id1)
	{
		$change = mysqli_query($connect , "UPDATE `Offer` SET `Offer_id`='$Offer_id1' WHERE `Offer_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='offer.php'>Back</a></button>";
	}

?>

<?php

echo "<html>
<body style='background-image:url(2.jpg);background-repeat: no-repeat;background-size:cover;'>

</body>
</html>";
	@$connect 	= mysqli_connect("localhost","root","","Promotion") or die("couldn't connect!");
	@$sname = $_POST['sname'];
	@$Promotion_id1 = $_POST['$Promotion_id1'];
	@$Deadline1 = $_POST['$Deadline1'];
	@$Status1 = $_POST['$Status1'];
	@$Object1 = $_POST['$Object1'];

	if($sname && $Deadline1)
	{
		$change = mysqli_query($connect , "UPDATE `Promotion` SET `Deadline`='$Deadline1' WHERE `Promotion_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='promotion.php'>Back</a></button>";
	}
	if($sname && $Status1)
	{
		$change = mysqli_query($connect , "UPDATE `Promotion` SET `Status`='$Status1' WHERE `Promotion_id` ='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='promotion.php'>Back</a></button>";
	}
	if($sname && $Object1)
	{
		$change = mysqli_query($connect , "UPDATE `Promotion` SET `Object`='$Object1' WHERE `Promotion_id`='$sname' ");
		echo "Successfully updated..";
    echo "<button><a href='promotion.php'>Back</a></button>";
	}

?>
